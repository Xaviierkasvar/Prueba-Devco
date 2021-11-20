<?php
class Candidato
{
	private $cedula;
	private $nombre;
	private $apellido;
	private $fecPost;
	private $pteo;
	private $ptec;
	private $com;
	private $NomEva;
	private $Conexion;
	
	public function setCedula($Cedula)
	{
		$this->cedula=$cedula;
	}
	
	public function getCedula()
	{
		return ($this->cedula);
	}
	
	public function setNombre($nombre)
	{
		$this->nombre=$nombre;
	}
	
	public function getNombre()
	{
		return ($this->nombre);
	}
	
	public function setApellido($apellido)
	{
		$this->apellido=$apellido;
	}
	
	public function getApellido()
	{
		return ($this->apellido);
	}
	public function setcor($cor)
	{
		$this->cor=$cor;
	}
	
	public function getcor()
	{
		return ($this->cor);
	}
	
	public function setptec($ptec)
	{
		$this->ptec=$ptec;
	}
	
	public function getptec()
	{
		return ($this->ptec);
	}
	
	public function setpteo($pteo)
	{
		$this->pteo=$pteo;
	}
	
	public function getpteo()
	{
		return ($this->pteo);
	}

	public function setfecPost($fecPost)
	{
		$this->fecPost=$fecPost;
	}
	
	public function getfecPost()
	{
		return ($this->fecPost);
	}
	public function setcom($com)
	{
		$this->com=$com;
	}
	
	public function getcom()
	{
		return ($this->com);
	}
	public function setNomEva($NomEva)
	{
		$this->NomEva=$NomEva;
	}
	
	public function getNomEva()
	{
		return ($this->NomEva);
	}
	public function setrol($rol)
	{
		$this->rol=$rol;
	}
	
	public function getrol()
	{
		return ($this->rol);
	}
	public function Candidato()
	{
		//$objConexion = Conectarse();
	}
	
	
	public function CrearCandidato($cedula,$nombre,$apellido,$cor,$rol,$fecPost,$salario,$com)
	{
		$this->cedula=$cedula;
		$this->nombre=$nombre;
		$this->apellido=$apellido;
		$this->cor=$cor;
		$this->rol=$rol;
		$this->fecPost=$fecPost;
		$this->salario=$salario;
		$this->pteo=$pteo;
		$this->ptec=$ptec;
		$this->com=$com;
		$this->NomEva=$NomEva;		
	}
	public function CrearEtp1($cedula,$pteo,$ptec,$com,$nom_eva)
	{
		$this->cedula=$cedula;
		$this->pteo=$pteo;
		$this->ptec=$ptec;
		$this->com=$com;
		$this->nom_eva=$nom_eva;
	}
	public function CrearEtp2($cedula,$cpsi,$cmed,$com,$nom_eva)
	{
		$this->cedula=$cedula;
		$this->cpsi=$cpsi;
		$this->cmed=$cmed;
		$this->com=$com;
		$this->nom_eva=$nom_eva;
	}
	public function CrearEtp3($cedula,$promedio,$acuerdo,$fecini,$coment)
	{
		$this->cedula=$cedula;
		$this->promedio=$promedio;
		$this->acuerdo=$acuerdo;
		$this->fecini=$fecini;
		$this->coment=$coment;
	}
	public function ConsultarAdmin($correo)
	{
		$this->Conexion=Conectarse();
		$sql="select * from admin where USUARI_Correo_b='$correo'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}	
	public function AgregarCandidato()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into info_candidato(cedula,nombre,apellido,correo,rol,fec_post,asp_sal,coment)
        values ('$this->cedula','$this->nombre','$this->apellido','$this->cor','$this->rol','$this->fecPost','$this->salario','$this->com')";
        $sql0="insert into candidatos_etp_1(cedula) values ('$this->cedula')";
        $sql1="insert into candidatos_etp_2(cedula) values ('$this->cedula')";
        $sql2="insert into candidatos_etp_3(cedula) values ('$this->cedula')";
        $sql3="insert into est_candidato(cedula,estado) values ('$this->cedula','REGISTRADO')";
		$resultado=$this->Conexion->query($sql);
		$resultado0=$this->Conexion->query($sql0);
		$resultado1=$this->Conexion->query($sql1);
		$resultado2=$this->Conexion->query($sql2);
		$resultado3=$this->Conexion->query($sql3);
		$this->Conexion->close();
		return $resultado;	
	}
	public function FinalizarCandidato($cedula)
	{	
		$this->Conexion=Conectarse();
		$sql="update est_candidato set estado='FINALIZADO' where cedula ='$cedula'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	public function AgregarEtp1()
	{	
		$this->Conexion=Conectarse();
		$sql="update candidatos_etp_1 set cedula='$this->cedula',cal_pteo='$this->pteo',cal_ptec='$this->ptec',coment='$this->com',nom_eva='$this->nom_eva' where cedula ='$this->cedula'";
        $sql0="update est_candidato set estado='ETAPA_1' where cedula ='$this->cedula'";
		$resultado=$this->Conexion->query($sql);
		$resultado0=$this->Conexion->query($sql0);
		$this->Conexion->close();
		return $resultado;	
	}
	public function AgregarEtp2()
	{	
		$this->Conexion=Conectarse();
		$sql="update candidatos_etp_2 set cedula='$this->cedula',cal_psi='$this->cpsi',cal_med='$this->cmed',coment='$this->com',nom_eva='$this->nom_eva' where cedula ='$this->cedula'";
        $sql0="update est_candidato set estado='ETAPA_2' where cedula ='$this->cedula'";
		$resultado=$this->Conexion->query($sql);
		$resultado0=$this->Conexion->query($sql0);
		$this->Conexion->close();
		return $resultado;	
	}
	public function AgregarEtp3()
	{	
		$this->Conexion=Conectarse();
		$sql="update candidatos_etp_3 set cedula='$this->cedula',cal_pro='$this->promedio',sal_fin='$this->acuerdo',fec_ini='$this->fecini',coment='$this->coment' where cedula ='$this->cedula'";
        $sql0="update est_candidato set estado='ETAPA_3' where cedula ='$this->cedula'";
		$resultado=$this->Conexion->query($sql);
		$resultado0=$this->Conexion->query($sql0);
		$this->Conexion->close();
		return $resultado;	
	}

	
	public function ConsultarCandidato($cedula)
	{
		$this->Conexion=Conectarse();
		$sql="select * from info_candidato where cedula='$cedula'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	public function ConsultaCandidatoEtp1($cedula)
	{
		$this->Conexion=Conectarse();
		$sql="select * from candidatos_etp_1 where cedula='$cedula'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	public function ConsultaCandidatoEtp2($cedula)
	{
		$this->Conexion=Conectarse();
		$sql="select * from candidatos_etp_2 where cedula='$cedula'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	public function ConsultaCandidatoEtp3($cedula)
	{
		$this->Conexion=Conectarse();
		$sql="select * from candidatos_etp_3 where cedula='$cedula'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	public function ActualizarCandidato()
	{	
		$this->Conexion=Conectarse();
		$sql="update info_candidato set cedula='$this->cedula',nombre='$this->nombre',apellido='$this->apellido',correo='$this->cor',rol='$this->rol',fec_post='$this->fecPost',asp_sal='$this->salario',coment='$this->com' where cedula ='$this->cedula'";
		$this->Conexion->close();
		return $resultado;	
	}
	public function ConsultaCandidato($cedula){
		$this->Conexion=Conectarse();
		$sql="select * from info_candidato where cedula='$cedula'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
    }
    public function ConsultaCandidatos(){
		$this->Conexion=Conectarse();
		$sql="select I.*, E.estado from info_candidato I, est_candidato E where I.cedula=E.cedula";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
    }
    public function ConsultaEstado(){
		$this->Conexion=Conectarse();
		$sql="select * from est_candidato";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
    }
}

?>