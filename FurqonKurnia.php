<!DOCTYPE html>
<html>
<body>
<?php
class mahasiswa
{ 
    // Properties
    private $name;
    private $nim;
    private $matkul;
    private $cita;
    private $organisasi;
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
    function __destruct() {
        echo "Perkenalkan nama saya {$this->name} dengan nim {$this->nim} mata kuliah saya kali ini adalah {$this->matkul} saya memiliki cita-cita {$this->cita}, didalam kampus saya bergabung dengan organisasi {$this->organisasi}.";
    }
}
$Furrz = new mahasiswa('Furqon Kurnia', '2255201018', 'pbo', 'Hack Bank Israel', 'Separate community');
    
echo "Nama: " . $Furrz->get_name();
echo "<br>";
echo "nim: " .  $Furrz->get_nim();
echo "<br>";
echo "matkul: " . $Furrz->get_matkul();
echo "<br>";
echo "Cita-Cita: " . $Furrz->get_cita();
echo "<br>";
echo $Furrz->get_organisasi();

?>

</body>
