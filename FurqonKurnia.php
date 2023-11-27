<!DOCTYPE html>
<html>
<body>
<?php
class mahasiswa
{ 
    // Properties
    public $name;
    public $nim;
    public $matkul;
    public $cita;
    public $organisasi;
    // Methods
    function __construct ($name, $nim, $matkul, $cita, $organisasi){
  	$this->name = $name;
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->cita = $cita;
    $this->organisasi = $organisasi;
    }
    function get_name()
    {
        return $this->name;
    }
    function get_nim() 
    {
        return $this->nim;
    }
    function get_matkul() 
    {
  	    return $this->matkul;
    }
    function get_cita() 
    {
  	    return $this->cita;
    }
    function get_organisasi()
    {
        return $this->organisasi;
    }
    public function intro() {
        echo "Nama saya {$this->name} dengan nim {$this->nim}, dalam mata kuliah {$this->matkul}, saya memiliki cita-cita {$this->cita} dan saya juga bergabung dalam organisasi {$this->organisasi}";
    }
}
class organisasi extends mahasiswa {
    public function message() {
    echo "Perkenalkan dirimu!";
    }
}
    
$Furrz = new mahasiswa('Furqon Kurnia', '2255201018', 'pbo', 'Hack Bank Israel', 'Ganjar Pranowo Nomer Satu'); $Furrz->message();
$Furrz->intro();    

?>

</body>
