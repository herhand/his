# Smart Hospitals (Hospital Management System)
Simple HIS in php(Laravel+AdminLTE2)

## This has the following features
* Patient Management
    * Patinet Registration (IN/OUT)
    * Get Patient Registration Card (Barcode Included)
    * Search Patient
    * Edit Pateint Details
    * Patient Profile
    * Treatment History
    * Mark as Inactive (Soft Delete)
* Create Appointments
* Check Patient
    * Write Diagnosis
    * Prescribe Medicines
    * Add Medical Data
* Issue Medicines To Prescriptions
    * Keeps track of issued medicines
* Multi Language Support
* User Role Based Access Control
    * Admin
    * Doctor
    * Pharmacist
    * General Staff
 * Attendance Recording Of Users
    * Finger Print Attendance Recording System
 * Report Generation
    * Patient Report
    * Medicine Report
    * Attendance Report
    

# Installation Guide
    1)Clone Or Download The Repository

    2)  a. go to "vendor/laravel/framework/src/Illuminate/Foundation/PackageManifest.php"
        b. Find this line and comment it: 
        "$packages = json_decode($this->files->get($path), true);"
        c. Add two new lines after the above commented line (b):
        "$installed = json_decode($this->files->get($path), true);"
        "$packages = $installed['packages'] ?? $installed;"
        d. source : https://stackoverflow.com/questions/61177995/laravel-packagemanifest-php-undefined-index-name
    
    2)Goto The Repository and Open a Terminal Enter Following Commands 
        composer install (or update if using compsoer >=2)
    
    3)Set the .env File with the relevant configuration
    
    4)Execute the Following Command
        php artisan key:generate
        php artisan migrate --seed    
        
    5)There are some accounts already created 
        pw    : 12345678
    

# Todo
Update to current version
