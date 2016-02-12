<?php
class Persona
{
	private $nombre;
	public function inicializar($nom)
	{
		$this->nombre=$nom;
	}
	public function imprimir()
	{
	echo $this->nombre;
	echo '<br>';
    }   
}
    $per1=new Persona();
    $per1->inicializar('Juan');
    $per1->imprimir()
    ?>
    <?php
    $per2=new Persona();
    $per2->inicializar('ana');
    $per2->imprimir();
?>
<?php
class Menu{
	private $enlaces = array();
	private $titulos= array();
	public function cargarOpcion($en,$tit)
	{
		$this->enlaces[]=$en;
		$this->titulos[]=$tit;
	}
	public function mostrar()
	{
		for($f=0;$f<count($this->enlaces);$f++)
		{
			echo '<a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
			echo "-";
		}
	}
}
?>
<?php
$menu1 = new Menu();
$menu1->cargarOpcion('http://www.facebook.com','Facebook');
$menu1->cargarOpcion('http://www.yahoo.com','Yhahoo');
$menu1->cargarOpcion('http://www.msn.com','MSN');
$menu1->mostrar();
?>
<?php
class CabeceraPagina{
	private $titulo;
	private $ubicacion;
	public function inicializar($tit , $ubi)
	{
		$this->titulo=$tit;
		$this->ubicacion=$ubi;
	}
	public function graficar()
	{
		echo'<div style="font-size:40px;text-align:'.$this->ubicacion.'">';
		echo $this->titulo;
		echo "</div>";
	}

}
$cabecera=new CabeceraPagina();
$cabecera->inicializar('Ingenieria de sistemas','center');
$cabecera->graficar();
?>
<?php
class Pagina{
	private $titulo;
	private $ubicacion;
	public function __construct($tit , $ubi)
	{
		$this->titulo=$tit;
		$this->ubicacion=$ubi;
	}
	public function graficar()
	{
		echo'<div style="font-size:40px;text-align:'.$this->ubicacion.'">';
		echo $this->titulo;
		echo "</div>";
	}
       

}
$cabecera=new Pagina('Ingenieria de sistemas','center');
$cabecera->graficar();
?>