<?php
    class Employee
    {
        private $name;
        private $civil_status;
        private $position;
        private $employment_status;
        private $regular_hours;
        private $ot_hours;

        public function __construct($name, $civil_status, $position, $employment_status, $regular_hours, $ot_hours)
        {
            $this->name = $name;
            $this->civil_status = $civil_status;
            $this->position = $position;
            $this->employment_status = $employment_status;
            $this->regular_hours = $regular_hours;
            $this->ot_hours = $ot_hours;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getCivilStatus()
        {
            return $this->civil_status;
        }

        public function getPosition()
        {
            return $this->position;
        }

        public function getEmploymentStatus()
        {
            return $this->employment_status;
        }

        public function getRegularHours()
        {
            return $this->regular_hours;
        }

        public function getOTHours()
        {
            return $this->ot_hours;
        }

        public function getRegularRate()
        {
            $position = $this->position;
            $employment_status = $this->employment_status;
            
            if($position == "staff" && $employment_status== "contractual")
            {
                return "300/day";
            }
            elseif($position == "staff" && $employment_status== "probationary")
            {
                return "350/day";
            }
            elseif($position == "staff" && $employment_status== "regular")
            {
                return "400/day";
            }
            elseif($position == "admin" && $employment_status== "contractual")
            {
                return "350/day";
            }
            elseif($position == "admin" && $employment_status== "probationary")
            {
                return "400/day";
            }
            elseif($position == "admin" && $employment_status== "regular")
            {
                return "500/day";
            }            
        }

        public function getOTRate()
        {
            $position = $this->position;
            $employment_status = $this->employment_status;
            
            if($position == "staff" && $employment_status== "contractual")
            {
                return "10/hour";
            }
            elseif($position == "staff" && $employment_status== "probationary")
            {
                return "25/hour";
            }
            elseif($position == "staff" && $employment_status== "regular")
            {
                return "30/hour";
            }
            elseif($position == "admin" && $employment_status== "contractual")
            {
                return "15/hour";
            }
            elseif($position == "admin" && $employment_status== "probationary")
            {
                return "30/hour";
            }
            elseif($position == "admin" && $employment_status== "regular")
            {
                return "40/hour";
            }     
            
        }

        public function computeGrossIncome()
        {
            return ($this->computeRegularPay() + $this->computeOTPay());
        }

        public function computeNetIncome()
        {
            $gross = $this->computeGrossIncome();
            $tax = $this->computeTax($gross);
            $healthCare = $this->getHealthCare(); 
            return ($gross - ($tax + $healthCare));
        }

        public function computeRegularPay()
        {
            $position = $this->position;
            $employment_status = $this->employment_status;
            $regular_hours = $this->regular_hours;
            
            if($position == "staff" && $employment_status== "contractual")
            {
                return (300/8) * $regular_hours;
            }
            elseif($position == "staff" && $employment_status== "probationary")
            {
                return (350/8) * $regular_hours;
            }
            elseif($position == "staff" && $employment_status== "regular")
            {
                return (400/8) * $regular_hours;
            }
            elseif($position == "admin" && $employment_status== "contractual")
            {
                return (350/8) * $regular_hours;
            }
            elseif($position == "admin" && $employment_status== "probationary")
            {
                return (400/8) * $regular_hours;
            }
            elseif($position == "admin" && $employment_status== "regular")
            {
                return (500/8) * $regular_hours;
            }
        }
        
        public function computeOTPay()
        {
            $position = $this->position;
            $employment_status = $this->employment_status;
            $ot_hours = $this->ot_hours;
            
            if($position == "staff" && $employment_status== "contractual")
            {
                return 10 * $ot_hours;
            }
            elseif($position == "staff" && $employment_status== "probationary")
            {
                return 25 * $ot_hours;
            }
            elseif($position == "staff" && $employment_status== "regular")
            {
                return 30 * $ot_hours;
            }
            elseif($position == "admin" && $employment_status== "contractual")
            {
                return 15 * $ot_hours;
            }
            elseif($position == "admin" && $employment_status== "probationary")
            {
                return 30 * $ot_hours;
            }
            elseif($position == "admin" && $employment_status== "regular")
            {
                return 40 * $ot_hours;
            }            
        }

        public function computeTax()
        {
            $grossIncome = $this->computeGrossIncome();

            if($this->civil_status == "single" && $grossIncome <= 1000 || $this->civil_status == "married" && $grossIncome <= 1500)
            {
                return 0;
            }
            elseif($this->civil_status == "single" && $grossIncome > 1000) 
            {   
					return ($grossIncome * 0.05);
            }
            elseif($this->civil_status == "married" && $grossIncome > 1500)
            {
                return ($grossIncome * 0.03);
            }
        }

        public function getHealthCare()
        {
            if($this->civil_status == "single")
            {
                return 200;
            }
            elseif($this->civil_status == "married")
            {
                return 75;
            }
        }
    }
?>