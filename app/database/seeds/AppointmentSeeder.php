<?php

class AppointmentSeeder extends Seeder {
  
  public function run()
  {
    
    Eloquent::unguard();
    
    Appointment::create(array(
      'customer_id' => 1,
      'appointment_date' => '2014-03-20',
      'appointment_time' => '07:00:00'
    ));
    
    Appointment::create(array(
      'customer_id' => 2,
      'appointment_date' => '2014-03-22',
      'appointment_time' => '14:00:00'
    ));
  }
}
