<?
  require(ROOT . "model/patientsModel.php");
  require(ROOT . "model/clientsModel.php");
  require(ROOT . "model/speciesModel.php");


  function index(){
    $datapatients =  GetAllPatients();
    render("patients/indexP", array(
     "datapatients" => $datapatients
   ));
  }


  function createP(){
  	render("patients/createP", array(
  		'dataspecies' => GetAllSpecies(),
  		'dataclients' => GetAllClients()
  	));
  }


  function createSave(){
    $createPatient=array(
    'patient_name' => $_POST['patient_name'],
    'species_id' => $_POST['species_id'],
    'patient_status' => $_POST['patient_status'],
    'client_id' => $_POST['client_id']
      );

  	createFunc($createPatient);
  	header("Location:" . URL . "Patients/index");
  }



  function editRoute($id){
    $data['patients']= GetOnePatient($id);
    $data['dataspecies']=GetAllSpecies();
    $data['dataclients']=GetAllClients();

    render('patients/editP',$data);
  }

  function editConfirm(){
    $dataP=array(
      'patient_name' => $_POST['patient_name'],
      'species_id' => $_POST['species_id'],
      'patient_status' => $_POST['patient_status'],
      'client_id' => $_POST['client_id'],
      'patient_id'   => $_POST["patient_id"]
    );
   editPatient($dataP);
   header("Location:" . URL . "Patients/index");
  }

  function deletePatient($id){
    deleteThis($id);
    header("Location:" . URL . "Patients/index");
  }
 ?>
