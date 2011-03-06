<?php 
	$params=$_REQUEST;
	ini_set("display_errors",1);
	require_once("../inc/magmi_statemanager.php");
	try
	{
		$engdef=explode(":",$params["engine"]);
		$engine_name=$engdef[0];
		$engine_class=$engdef[1];
		require_once("../engines/$engine_name.php");
	}
	catch(Exception $e)
	{
		die("ERROR");
	}
	class FileLogger
	{
		protected $_fname;
		
		public function __construct($fname)
		{
			$this->_fname=$fname;
			$f=fopen($this->_fname,"w");
			fclose($f);
		}

		public function log($data,$type)
		{
			
			$f=fopen($this->_fname,"a");
			fwrite($f,"$type:$data\n");
			fclose($f);
		}
		
	}
	
	class EchoLogger
	{
		public function log($data,$type)
		{
			echo("$type:$data<br>");
		}
		
	}
	if(Magmi_StateManager::getState()!=="running")
	{
		Magmi_StateManager::setState("idle");
		set_time_limit(0);
		$mmi_imp=new $engine_class();
		$logfile=isset($params["logfile"])?$params["logfile"]:null;
		if(isset($logfile) && $logfile!="")
		{
			$fname=Magmi_StateManager::getStateDir().DS.$logfile;
			$mmi_imp->setLogger(new FileLogger($fname));
		}	
		else
		{
			$mmi_imp->setLogger(new EchoLogger());
		
		}
		$mmi_imp->run($params);
		
	}
?>
