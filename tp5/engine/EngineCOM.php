<?php
	namespace softjx\sl\engine;
	use softjx\sl\drive\PhpSerial;
	class EngineCOM{


		public function initDevice($device,$rate){
			 $serial = PhpSerial();
			if ($device.equals(null)&&$rate == null) {
				error_log("device not equals null");
			}else{
				$this->serial->PhpSerial();
			}
			$this->serial->openDevice();

		}

		public function openDevice(){

		}

		public function isDeviceOpen(){

		}


		public function isDeviceHold(){

		}
		
	}