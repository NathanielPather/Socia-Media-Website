<?php
    class UserSeeder extends Seeder {
        public function run()
        {
            $user = new User;
            $user->email = 'Bob@a.org';
            $user->password = '1234';
            $user->name = 'Bob';
            $user->dob = '01/01/1994';
            $user->image = '';
            $user->save();
            
            $user = new User;
            $user->email = 'John@a.org';
            $user->password = '1234';
            $user->name = 'John';
            $user->dob = '02/02/1995';
            $user->image = '';
            $user->save();
            
            $user = new User;
            $user->email = 'Tom@a.org';
            $user->password = '1234';
            $user->name = 'Tom';
            $user->dob = '03/03/1996';
            $user->image = '';
            $user->save();
            
            $user = new User;
            $user->email = 'Ryan@a.org';
            $user->password = '1234';
            $user->name = 'Ryan';
            $user->dob = '04/04/1997';
            $user->image = '';
            $user->save();
            
            $user = new User;
            $user->email = 'Jack@a.org';
            $user->password = '1234';
            $user->name = 'Jack';
            $user->dob = '05/05/1998';
            $user->image = '';
            $user->save();
            
            $user = new User;
            $user->email = 'Natasha@a.org';
            $user->password = '1234';
            $user->name = 'Natasha';
            $user->dob = '06/06/1999';
            $user->image = '';
            $user->save();
            
            $user = new User;
            $user->email = 'Emma@a.org';
            $user->password = '1234';
            $user->name = 'Emma';
            $user->dob = '07/07/2000';
            $user->image = '';
            $user->save();
            
            $user = new User;
            $user->email = 'Sophie@a.org';
            $user->password = '1234';
            $user->name = 'Sophie';
            $user->dob = '08/08/2001';
            $user->image = '';
            $user->save();
            
            $user = new User;
            $user->email = 'Dylan@a.org';
            $user->password = '1234';
            $user->name = 'Dylan';
            $user->dob = '09/09/2002';
            $user->image = '';
            $user->save();
            
            $user = new User;
            $user->email = 'Brian@a.org';
            $user->password = '1234';
            $user->name = 'Brian';
            $user->dob = '10/10/2003';
            $user->image = '';
            $user->save();
        }
    }
?>