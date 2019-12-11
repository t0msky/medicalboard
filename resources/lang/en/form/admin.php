<?php

// For Admin's modules

return [

	'general' => [
                    
                    // 'tab_title' => [

                    //           'accident_notice' => 'Accident Notice',

                    // ],

                    'delete' => 'Delete',
                    'update' => 'Update',
                    'no' => 'No',
                    'add_holiday' => 'ADD HOLIDAY',
                    'add_weekend' => 'ADD WEEKEND',
                    'search' => 'SEARCH',

                    'usergroup' => [
                              
                              'title1' => 'Create User Group',
                              'group_id' => 'Group ID',
                              'description' => 'Description',
                              'title2' => 'User Group Management',
                              'title3' => 'Update User Group',
                    ],

                     'user' => [
                              
                              'title1' => 'Create Staff',
                              'icno' => 'Identification No',
                              'username' => 'User Name',
                              'email' => 'Email',
                              'password' => 'Password',
                              'name' => 'Name',
                              'staff_number' => 'Staff Number',
                              'branch' => 'Branch',
                              'management_id' => 'Manager / Supervisor',
                              'job_level' => 'Job Level / Category',
                              'multi_select_role' => 'Multi Select Role',
                              'user_group' => 'User Group',
                              'title2' => 'User Management',
                              'no' => 'No',    
                              'title3' => 'Update Staff',            
                    ],

                     'role' => [
                              
                              'title1' => 'Create Roles',
                              'name' => 'Role',
                              'code' => 'Role Code',
                              'description' => 'Description',
                              'usergroup' => 'User Group',
                              'title2' => 'Roles Management',
                              'title3' => 'Update Roles',           
                    ],

                     'branch' => [
                              
                              'title1' => 'Create Branch',
                              'branch_name' => 'Branch Name',
                              'branch_code' => 'Branch Code',
                              'status' => 'Status',
                              'e-mail' => 'Email',
                              'statecode' => 'Statecode',
                              'state' => 'State',
                              'assist_branchcode' => 'ASSIST Branch Code',
                              'pic' => 'Person in Charge',
                              'long_name' => 'Branch Long Name',
                              'branch_address' => 'Branch Address',
                              'postcode' => 'Postcode',           
                              'city' => 'City',           
                              'phone_no' => 'Phone No',           
                              'fax_no' => 'Fax No',           
                              'type' => 'Type',   
                              'title2' => 'Branch Management',  
                              'title3' => 'Update Branch',          
                    ],

                     'parameter' => [
                              
                              'title1' => 'Create Parameter',
                              'code_category' => 'Code Category',
                              'ref_code' => 'Reference Code',
                              'description_en' => 'Description in English',
                              'description_bm' => 'Description in Bahasa Melayu',
                              'title2' => 'Parameter Management',
                              'title3' => 'Update Parameter',
                    ],

                     'value' => [
                              
                              'title1' => 'Create Value',
                              'reference_code' => 'Reference Code',
                              'reference_description' => 'Reference Description',
                              'title2' => 'Parameter Value Management',
                              'title3' => 'Update Value',
                    ],

                    'audit' => [
                              
                              'title1' => 'Audit Trail',
                              'date_from' => 'Date From:',
                              'date_to' => 'Date To:',
                              'filter' => 'Filter',
                              'reset' => 'Reset',
                              'date' => 'Date',
                              'time' => 'Time',
                              'user_id' => 'User ID',
                              'branchcode' => 'Branchcode',
                              'category' => 'Category',
                              'att_type' => 'Attribute Type',
                              'id_no' => 'ID No',
                              'crn' => 'Case Refno',
                              'mrn' => 'Medical Refno',
                              'rtwn' => 'Return to Work Refno',
                              'description' => 'Descriptrion',
                              'success' => 'Success',   
                    ],

                    'hospital' => [
                              
                              'title1' => 'Create Hospital',
                              'hospital_type' => 'Hospital Type',
                              'hospital_name' => 'Hospital Name',
                              'address' => 'Address',
                              'postcode' => 'Postcode',
                              'city' => 'City',
                              'state' => 'State',
                              'medical_board_category' => 'Medical Board Category',
                              'medical_board' => 'Medical Board',
                              'medical_special_board' => 'Medical Special Board',
                              'medical_appeal_board' => 'Medical Appeal Board',
                              'title2' => 'Hospital Management',
                               'no' => 'No', 
                               'title3' => 'Update Hospital',   
                    ],

                    'doctor' => [
                              
                              'title1' => 'Create Doctor',
                              'id_no' => 'ID No',
                              'speciality' => 'Speciality',
                              'dr_name' => 'Dr Name',
                              'type' => 'Type',
                              'group' => 'Group',
                              'account_no' => 'Account No',
                              'bank' => 'Bank',
                              'title2' => 'Doctor Management',
                              'title3' => 'Update Doctor',
                    ],

                     'nurse' => [
                              
                              'title1' => 'Create Nurse',
                              'hospital' => 'Hospital',
                              'nurse_name' => 'Nurse Name',
                              'title2' => 'Nurse Management',
                              'title3' => 'Update Nurse',
                    ],
                   
                    'sp' => [
                              
                              'title1' => 'Create Service Provider (SP)',
                              'service_provider' => 'Service Provider',
                              'state' => 'State',
                              'nurse_name' => 'Nurse Name',
                              'title2' => 'SP Management',
                              'title3' => 'Update Service Provider (SP)',
                    ],

                    'spr' => [
                              
                              'title1' => 'SP Representative',
                              'representative' => 'Representative',
                              'specialty' => 'Specialty',
                              'title2' => 'Manage representative',
                              'title3' => 'Update representative',
                    ],

                    'sprtw' => [
                              
                              'title1' => 'SP Representative',
                    ],

                    'r_task' => [
                              
                              'title1' => 'Reassign Task',
                              'date' => 'Date',
                              'aging' => 'Aging',
                              'module' => 'Module',
                              'source' => 'Source',
                              'reference_no' => 'Reference No',
                              'notice_type' => 'Notice Type',
                              'description' => 'Description',
                              'task_status' => 'Task Status',
                              'reassign_to' => 'Reassign To',
                              'reassingment_reason' => 'Reassign',

                    ],

                    'unavailibility' => [
                              
                              'title1' => 'User Unavailibility Screen',
                              'user_id' => 'User ID',
                              'start_date' => 'In-active Start Date ',
                              'end_date' => 'In-active End Date',
                              'unavailibility_reasons' => 'Unavailibility Reasons',
                    ],

                     'integration_log' => [
                              
                              'title1' => 'Integration Log Screen',
                              'message_ref_no' => 'Messagerefno',
                              'case_ref_no' => 'Caserefno',
                              'path' => 'Path',
                              'response' => 'Response',
                              'request' => 'Request',
                              'sent_confirmation' => 'Sent confirmation',
                              'message' => 'Message',
                              'addby' => 'Addby',
                              'branch_code' => 'Branch Code',
                            
                    ],

                    'calendar' => [
                              
                              'title1' => 'Calendar Management',
                              'tab_title1' => 'Calendar',
                              'tab_title2' => 'Public Holiday',
                              'tab_title3' => 'Weekend',
                              'year' => 'Year',
                              'holiday_name' => 'Holiday Name',
                              'description' => 'Description',
                              'date' => 'Date',
                              'to' => 'To',
                              'region' => 'Region',
                              'status' => 'Status',
                              'action' => 'Action',
                              'start_date' => 'Start Date',
                              'end_date' => 'End Date',
                              'state' => 'State',
                              'update_public_holiday' => 'Update Public Holiday',
                              'update_weekend_holiday' => 'Update Weekend Holiday',

                             
                            
                    ],


                 
          ],

	
];