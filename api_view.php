<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Web Services</title>
        <style>

            h2 {
                background-color: #FDF5CE;
                padding: 4px;
            }
            .api-container {
                float: right; 
                width: 100%
            }
        </style>
    </head>

    <body>
        <div class="api-container">
            <h2>Add Client</h2>            
            <div>
                <b>Access URL: <span style="text-decoration: underline;">http://185.104.29.36/~gwfgnew/api/add_client</span></b>
                <br/><br/>
                <b>Request Data</b>
                <p id="AuthenticateMember">
                    <pre>
                        {
                            "first_name": "abcdd",
                            "last_name": "abcdd",
                            "email": "sonia@qodemaker.com",
                            "phone": "123456789",
                            "created_by": "81",
                        }
                    </pre>
                </p>
            </div>
        </div>

        
        <div class="api-container">
            <h2> Do Add Client</h2>            
            <div>
                <b>Access URL: <span style="text-decoration: underline;">http://185.104.29.36/~gwfgnew/api/do_add_client</span></b>
                <br/><br/>
                <b>Request Data</b>
                <p id="AuthenticateMember">
                    <pre>
                        {
							"user_id" : "99",
                            "date_of_birth": "abcdd",
                            "country_of_birth": "abcdd",
                            "social_insurance_no": "sonia@qodemaker.com",
                            "driver_licence_no": "123456789",
                            "driver_licence_expiry": "123456789",
                            "home_address": "123456789",
                            "years_at_current_address": "123456789",
                            "total_years_in_canada": "123456789",
                            "residency_status": "123456789",
                            "occupation": "123456789",
                            "employee_name": "123456789",
                            "employee_address": "123456789",
                            "employee_since_when": "123456789",
                            "duties": "123456789",
                            "employer_contact_no": "123456789",
                            "gross_income": "123456789",
                            "height_and_any_change": "123456789",
                            "weight_and_any_change": "123456789",
                            "family_doctor_name": "123456789",
                            "family_doctor_address": "123456789",
                            "doctor_contact_no": "123456789",
                            "last_visit_to_doctor": "123456789",
                            "reason": "123456789",
                            "any_treatment_or_followup": "123456789",
							"taking_any_medication": "123456789",
                            "father": "123456789",
							"mother": "123456789",
							"siblings": "123456789",
                            "alcohol_smoking": "123456789",
                            "any_criminal_offence": "123456789",
                            "any_risk_activity": "123456789",
                            "Bank_ruptcy": "123456789",
                            "traffic_ticket": "123456789",
                            "driver_licence_suspended": "123456789",
                            "going_out_of_country": "123456789",
                            "company": "123456789",
							"policy": "123456789",
							"issue_year": "123456789",
                            "benefixiary_name": "123456789",
                            "trustee": "123456789",
							"angina_heart_attack": "123456789",
							"Diabieties": "123456789",
							"Hepatitis": "123456789",
							"Cerebral_Vascular_Stroke": "123456789",
							"Major_Dipression": "123456789",
							"Bipolar_Disorder": "123456789",
							"Cronic_Obstructive": "123456789",
							"Crohns_Disease": "123456789",
							"Cancer_Malign": "123456789",
							"Have_you_been_hospitialized": "123456789",
							"followed_for_another_illness": "123456789",
							"Disability_or_absence_from_work": "123456789",
										


                        }
                    </pre>
                </p>
            </div>
        </div>
        <div class="api-container">
            <h2>View Client</h2>            
            <div>
                <b>Access URL: <span style="text-decoration: underline;">http://185.104.29.36/~gwfgnew/api/view_client</span></b>
                <br/><br/>
                <b>Request Data</b>
                <p id="AuthenticateMember">
                    <pre>
                        {
                            "user_id": "81",
                        }
                    </pre>
                </p>
            </div>
        </div>
        <div class="api-container">
            <h2>View Client Details</h2>            
            <div>
                <b>Access URL: <span style="text-decoration: underline;">http://185.104.29.36/~gwfgnew/api/view_client_details</span></b>
                <br/><br/>
                <b>Request Data</b>
                <p id="AuthenticateMember">
                    <pre>
                        {
                            "user_id": "119",
                        }
                    </pre>
                </p>
            </div>
        </div>
        <div class="api-container">
            <h2>Login</h2>            
            <div>
                <b>Access URL: <span style="text-decoration: underline;">http://185.104.29.36/~gwfgnew/api/login</span></b>
                <br/><br/>
                <b>Request Data</b>
                <p id="AuthenticateMember">
                    <pre>
                        {
                            "email": "admin@admin.com",
                            "password": "admin"
                        }
                    </pre>
                </p>
            </div>
        </div>
        <div class="api-container">
            <h2>logout</h2>            
            <div>
                <b>Access URL: <span style="text-decoration: underline;">http://185.104.29.36/~gwfgnew/api/logout</span></b>
                <br/><br/>
                <b>Request Data</b>
                <p id="AuthenticateMember">
                    <pre>
                        {
                            "user_id": "1"
                        }
                    </pre>
                </p>
            </div>
        </div>
        <div class="api-container">
            <h2>Forgot Password</h2>            
            <div>
                <b>Access URL: <span style="text-decoration: underline;">http://185.104.29.36/~gwfgnew/api/forgot_password</span></b>
                <br/><br/>
                <b>Request Data</b>
                <p id="AuthenticateMember">
                    <pre>
                        {
                            "email": "admin@admin.com"
                        }
                    </pre>
                </p>
            </div>
        </div>
		
		<div class="api-container">
            <h2>Event List</h2>            
            <div>
                <b>Access URL: <span style="text-decoration: underline;">http://185.104.29.36/~gwfgnew/api/view_events</span></b>
                <br/><br/>
                <b>Request Data</b>
                <p id="AuthenticateMember">
                    <pre>
                        {
                            
                        }
                    </pre>
                </p>
            </div>
        </div>
        <div class="api-container">
            <h2>Event Details</h2>            
            <div>
                <b>Access URL: <span style="text-decoration: underline;">http://185.104.29.36/~gwfgnew/api/view_events_details</span></b>
                <br/><br/>
                <b>Request Data</b>
                <p id="AuthenticateMember">
                    <pre>
                        {
                            "event_id": "15",
                        }
                    </pre>
                </p>
            </div>
        </div>
		
		 <div class="api-container">
            <h2>Forms List</h2>            
            <div>
                <b>Access URL: <span style="text-decoration: underline;">http://185.104.29.36/~gwfgnew/api/view_forms</span></b>
                <br/><br/>
                <b>Request Data</b>
                <p id="AuthenticateMember">
                    <pre>
                        {
                            
                        }
                    </pre>
                </p>
            </div>
        </div>
		
		
		 <div class="api-container">
            <h2>Add Team</h2>            
            <div>
                <b>Access URL: <span style="text-decoration: underline;">http://185.104.29.36/~gwfg/api/add_team</span></b>
                <br/><br/>
                <b>Request Data</b>
                <p id="AuthenticateMember">
                    <pre>
                        {
                            "email" : "abc@gmail.com",
							"role" : "SMD",
							"current_user_id" : "1",
							
                        }
                    </pre>
                </p>
            </div>
        </div>
		
		
		<div class="api-container">
            <h2>Appointment list by user id</h2>            
            <div>
                <b>Access URL: <span style="text-decoration: underline;">http://185.104.29.36/~gwfg/api/appointment_list_by_user_id</span></b>
                <br/><br/>
                <b>Request Data</b>
                <p id="AuthenticateMember">
                    <pre>
                        {
                            "id" : "2",
							
                        }
                    </pre>
                </p>
            </div>
        </div>
		
		<div class="api-container">
            <h2>Appointment list by date</h2>            
            <div>
                <b>Access URL: <span style="text-decoration: underline;">http://185.104.29.36/~gwfg/api/appointment_list_by_date</span></b>
                <br/><br/>
                <b>Request Data</b>
                <p id="AuthenticateMember">
                    <pre>
                        {
                            "date" : "2-12-1292",
							
                        }
                    </pre>
                </p>
            </div>
        </div>
		
		<div class="api-container">
            <h2>Appointment list by month</h2>            
            <div>
                <b>Access URL: <span style="text-decoration: underline;">http://185.104.29.36/~gwfg/api/appointment_list_by_month</span></b>
                <br/><br/>
                <b>Request Data</b>
                <p id="AuthenticateMember">
                    <pre>
                        {
                            "month" : "jan",
							
                        }
                    </pre>
                </p>
            </div>
        </div>
		
		<div class="api-container">
            <h2>mortgage renewal</h2>            
            <div>
                <b>Access URL: <span style="text-decoration: underline;">http://185.104.29.36/~gwfg/api/mortgage_renewal</span></b>
                <br/><br/>
                <b>Request Data</b>
                <p id="AuthenticateMember">
                    <pre>
                        {
                            "login_id" : "1",
							"date" : "1-12-2018",
							"client_id" : "12",
							
                        }
                    </pre>
                </p>
            </div>
        </div>
        <div style="float:left;height:300px"></div>
    </body>
</html>