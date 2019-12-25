<?php
// W skrypcie definicji kontrolera nie trzeba dołączać już niczego.
// Kontroler wskazuje tylko za pomocą 'use' te klasy z których jawnie korzysta
// (gdy korzysta niejawnie to nie musi - np używa obiektu zwracanego przez funkcję)

// Zarejestrowany autoloader klas załaduje odpowiedni plik automatycznie w momencie, gdy skrypt będzie go chciał użyć.
// Jeśli nie wskaże się klasy za pomocą 'use', to PHP będzie zakładać, iż klasa znajduje się w bieżącej
// przestrzeni nazw - tutaj jest to przestrzeń 'app\controllers'.

// Przypominam, że tu również są dostępne globalne funkcje pomocnicze - o to nam właściwie chodziło

namespace app\controllers;

//zamieniamy zatem 'require' na 'use' wskazując jedynie przestrzeń nazw, w której znajduje się klasa
use app\forms\CalcForm;
use app\transfer\CalcResult;

/** Kontroler kalkulatora
 * @author Przemysław Kudłacik
 *
 */
class CalcCtrl {

	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->x = getFromRequest('x');
		$this->form->y = getFromRequest('y');
		$this->form->op = getFromRequest('op');
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->x ) && isset ( $this->form->y ) && isset ( $this->form->op ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false;
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->x == "") {
			getMessages()->addError('Nie podano kwoty');
		}
		if ($this->form->op == "") {
			getMessages()->addError('Nie podano oprocentowania');
		}
		if ($this->form->y == "") {
			getMessages()->addError('Nie podano lat');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! getMessages()->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->x )) {
				getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->op )) {
				getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
			}
			if (! is_numeric ( $this->form->y )) {
				getMessages()->addError('Trzecia wartość nie jest liczbą całkowitą');
			}
		}
		
		return ! getMessages()->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	 /*
	public function process(){

		$this->getParams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->x = intval($this->form->x);
			$this->form->op = intval($this->form->op);
			getMessages()->addInfo('Parametry poprawne.');
				
			//wykonanie operacji
                        $this->result->result= $this->form->x/($this->form->y*12)*(1+$this->form->op/100);
			
			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	*/
		public function action_calcCompute(){

		$this->getParams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->x = intval($this->form->x);
			$this->form->op = intval($this->form->op);
			$this->form->y = intval($this->form->y);
			getMessages()->addInfo('Parametry poprawne.');
				
			//wykonanie operacji
			$this->result->result= $this->form->x/($this->form->y*12)*(1+$this->form->op/100);
			
			getMessages()->addInfo('Wykonano obliczenia.');
			try{
				$db= new \Medoo\Medoo([
				
					'database_type' => 'mysql',
					'database_name' => 'calc',
					'server' => 'localhost',
					'username' => 'root',
					'password' => '',
					'option' => [
						\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
					]
				]);
				$db->insert("result", [
					"value_kwota" => $this->form->x,
					"value_oprocentowanie" => $this->form->op,
					"value_lata" => $this->form->y,
					"result" => $this->result->result,
					"data" =>date("Y-m-d")
					
				]);
			}catch(Exception $e){
			getMessages()->addError($e->getMessage());
			}
		}
		
		$this->generateView();
	}
	    public function process2(){
        foreach($db as $database)
	{
        $db = $database->select("result", "*");
	}
}
		public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}
	
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));
					
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.tpl'); // już nie podajemy pełnej ścieżki - foldery widoków są zdefiniowane przy ładowaniu Smarty
	}
}
