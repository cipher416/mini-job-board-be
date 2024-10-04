<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
                    [
                        "title"=> "Software Engineer",
                      "location"=> "Toronto",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP001"
                    ],
                    [
                        "title"=> "Data Analyst",
                      "location"=> "Vancouver",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP002"
                    ],
                    [
                        "title"=> "Project Manager",
                      "location"=> "Montreal",
                      "job_type"=> "contract",
                      "company_id"=> "COMP003"
                    ],
                    [
                        "title"=> "UI/UX Designer",
                      "location"=> "Calgary",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP004"
                    ],
                    [
                        "title"=> "Sales Executive",
                      "location"=> "Edmonton",
                      "job_type"=> "part-time",
                      "company_id"=> "COMP005"
                    ],
                    [
                        "title"=> "Marketing Specialist",
                      "location"=> "Winnipeg",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP006"
                    ],
                    [
                        "title"=> "HR Manager",
                      "location"=> "Ottawa",
                      "job_type"=> "contract",
                      "company_id"=> "COMP007"
                    ],
                    [
                        "title"=> "DevOps Engineer",
                      "location"=> "Quebec City",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP008"
                    ],
                    [
                        "title"=> "Business Analyst",
                      "location"=> "Toronto",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP009"
                    ],
                    [
                        "title"=> "Customer Support Representative",
                      "location"=> "Halifax",
                      "job_type"=> "part-time",
                      "company_id"=> "COMP010"
                    ],
                    [
                        "title"=> "Operations Manager",
                      "location"=> "St. John's",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP011"
                    ],
                    [
                        "title"=> "IT Support Specialist",
                      "location"=> "Toronto",
                      "job_type"=> "contract",
                      "company_id"=> "COMP012"
                    ],
                    [
                        "title"=> "Front-end Developer",
                      "location"=> "Montreal",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP013"
                    ],
                    [
                        "title"=> "Accountant",
                      "location"=> "Vancouver",
                      "job_type"=> "part-time",
                      "company_id"=> "COMP014"
                    ],
                    [
                        "title"=> "Legal Advisor",
                      "location"=> "Ottawa",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP015"
                    ],
                    [
                        "title"=> "Technical Writer",
                      "location"=> "Victoria",
                      "job_type"=> "contract",
                      "company_id"=> "COMP016"
                    ],
                    [
                        "title"=> "Database Administrator",
                      "location"=> "Regina",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP017"
                    ],
                    [
                        "title"=> "Network Engineer",
                      "location"=> "Saskatoon",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP018"
                    ],
                    [
                        "title"=> "Content Creator",
                      "location"=> "Kelowna",
                      "job_type"=> "part-time",
                      "company_id"=> "COMP019"
                    ],
                    [
                        "title"=> "Mobile Developer",
                      "location"=> "Mississauga",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP020"
                    ],
                    [
                        "title"=> "Software Engineer",
                      "location"=> "Toronto",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP021"
                    ],
                    [
                        "title"=> "Data Analyst",
                      "location"=> "Vancouver",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP022"
                    ],
                    [
                        "title"=> "Project Manager",
                      "location"=> "Montreal",
                      "job_type"=> "contract",
                      "company_id"=> "COMP023"
                    ],
                    [
                        "title"=> "UI/UX Designer",
                      "location"=> "Calgary",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP024"
                    ],
                    [
                        "title"=> "Sales Executive",
                      "location"=> "Edmonton",
                      "job_type"=> "part-time",
                      "company_id"=> "COMP025"
                    ],
                    [
                        "title"=> "Marketing Specialist",
                      "location"=> "Winnipeg",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP026"
                    ],
                    [
                        "title"=> "HR Manager",
                      "location"=> "Ottawa",
                      "job_type"=> "contract",
                      "company_id"=> "COMP027"
                    ],
                    [
                        "title"=> "DevOps Engineer",
                      "location"=> "Quebec City",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP028"
                    ],
                    [
                        "title"=> "Business Analyst",
                      "location"=> "Toronto",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP029"
                    ],
                    [
                        "title"=> "Customer Support Representative",
                      "location"=> "Halifax",
                      "job_type"=> "part-time",
                      "company_id"=> "COMP030"
                    ],
                    [
                        "title"=> "Operations Manager",
                      "location"=> "St. John's",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP031"
                    ],
                    [
                        "title"=> "IT Support Specialist",
                      "location"=> "Toronto",
                      "job_type"=> "contract",
                      "company_id"=> "COMP032"
                    ],
                    [
                        "title"=> "Front-end Developer",
                      "location"=> "Montreal",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP033"
                    ],
                    [
                        "title"=> "Accountant",
                      "location"=> "Vancouver",
                      "job_type"=> "part-time",
                      "company_id"=> "COMP034"
                    ],
                    [
                        "title"=> "Legal Advisor",
                      "location"=> "Ottawa",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP035"
                    ],
                    [
                        "title"=> "Technical Writer",
                      "location"=> "Victoria",
                      "job_type"=> "contract",
                      "company_id"=> "COMP036"
                    ],
                    [
                        "title"=> "Database Administrator",
                      "location"=> "Regina",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP037"
                    ],
                    [
                        "title"=> "Network Engineer",
                      "location"=> "Saskatoon",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP038"
                    ],
                    [
                        "title"=> "Content Creator",
                      "location"=> "Kelowna",
                      "job_type"=> "part-time",
                      "company_id"=> "COMP039"
                    ],
                    [
                        "title"=> "Mobile Developer",
                      "location"=> "Mississauga",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP040"
                    ],
                    [
                        "title"=> "Software Engineer",
                      "location"=> "Toronto",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP041"
                    ],
                    [
                        "title"=> "Data Analyst",
                      "location"=> "Vancouver",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP042"
                    ],
                    [
                        "title"=> "Project Manager",
                      "location"=> "Montreal",
                      "job_type"=> "contract",
                      "company_id"=> "COMP043"
                    ],
                    [
                        "title"=> "UI/UX Designer",
                      "location"=> "Calgary",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP044"
                    ],
                    [
                        "title"=> "Sales Executive",
                      "location"=> "Edmonton",
                      "job_type"=> "part-time",
                      "company_id"=> "COMP045"
                    ],
                    [
                        "title"=> "Marketing Specialist",
                      "location"=> "Winnipeg",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP046"
                    ],
                    [
                        "title"=> "HR Manager",
                      "location"=> "Ottawa",
                      "job_type"=> "contract",
                      "company_id"=> "COMP047"
                    ],
                    [
                        "title"=> "DevOps Engineer",
                      "location"=> "Quebec City",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP048"
                    ],
                    [
                        "title"=> "Business Analyst",
                      "location"=> "Toronto",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP049"
                    ],
                    [
                        "title"=> "Customer Support Representative",
                      "location"=> "Halifax",
                      "job_type"=> "part-time",
                      "company_id"=> "COMP050"
                    ],
                    [
                        "title"=> "Operations Manager",
                      "location"=> "St. John's",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP051"
                    ],
                    [
                        "title"=> "IT Support Specialist",
                      "location"=> "Toronto",
                      "job_type"=> "contract",
                      "company_id"=> "COMP052"
                    ],
                    [
                        "title"=> "Front-end Developer",
                      "location"=> "Montreal",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP053"
                    ],
                    [
                        "title"=> "Accountant",
                      "location"=> "Vancouver",
                      "job_type"=> "part-time",
                      "company_id"=> "COMP054"
                    ],
                    [
                        "title"=> "Legal Advisor",
                      "location"=> "Ottawa",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP055"
                    ],
                    [
                        "title"=> "Technical Writer",
                      "location"=> "Victoria",
                      "job_type"=> "contract",
                      "company_id"=> "COMP056"
                    ],
                    [
                        "title"=> "Database Administrator",
                      "location"=> "Regina",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP057"
                    ],
                    [
                        "title"=> "Network Engineer",
                      "location"=> "Saskatoon",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP058"
                    ],
                    [
                        "title"=> "Content Creator",
                      "location"=> "Kelowna",
                      "job_type"=> "part-time",
                      "company_id"=> "COMP059"
                    ],
                    [
                        "title"=> "Mobile Developer",
                      "location"=> "Mississauga",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP060"
                    ],
                    [
                        "title"=> "Software Engineer",
                      "location"=> "Toronto",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP061"
                    ],
                    [
                        "title"=> "Data Analyst",
                      "location"=> "Vancouver",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP062"
                    ],
                    [
                        "title"=> "Project Manager",
                      "location"=> "Montreal",
                      "job_type"=> "contract",
                      "company_id"=> "COMP063"
                    ],
                    [
                        "title"=> "UI/UX Designer",
                      "location"=> "Calgary",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP064"
                    ],
                    [
                        "title"=> "Sales Executive",
                      "location"=> "Edmonton",
                      "job_type"=> "part-time",
                      "company_id"=> "COMP065"
                    ],
                    [
                        "title"=> "Marketing Specialist",
                      "location"=> "Winnipeg",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP066"
                    ],
                    [
                        "title"=> "HR Manager",
                      "location"=> "Ottawa",
                      "job_type"=> "contract",
                      "company_id"=> "COMP067"
                    ],
                    [
                        "title"=> "DevOps Engineer",
                      "location"=> "Quebec City",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP068"
                    ],
                    [
                        "title"=> "Business Analyst",
                      "location"=> "Toronto",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP069"
                    ],
                    [
                        "title"=> "Customer Support Representative",
                      "location"=> "Halifax",
                      "job_type"=> "part-time",
                      "company_id"=> "COMP070"
                    ],
                    [
                        "title"=> "Operations Manager",
                      "location"=> "St. John's",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP071"
                    ],
                    [
                        "title"=> "IT Support Specialist",
                      "location"=> "Toronto",
                      "job_type"=> "contract",
                      "company_id"=> "COMP072"
                    ],
                    [
                        "title"=> "Front-end Developer",
                      "location"=> "Montreal",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP073"
                    ],
                    [
                        "title"=> "Accountant",
                      "location"=> "Vancouver",
                      "job_type"=> "part-time",
                      "company_id"=> "COMP074"
                    ],
                    [
                        "title"=> "Legal Advisor",
                      "location"=> "Ottawa",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP075"
                    ],
                    [
                        "title"=> "Technical Writer",
                      "location"=> "Victoria",
                      "job_type"=> "contract",
                      "company_id"=> "COMP076"
                    ],
                    [
                        "title"=> "Database Administrator",
                      "location"=> "Regina",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP077"
                    ],
                    [
                        "title"=> "Network Engineer",
                      "location"=> "Saskatoon",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP078"
                    ],
                    [
                        "title"=> "Content Creator",
                      "location"=> "Kelowna",
                      "job_type"=> "part-time",
                      "company_id"=> "COMP079"
                    ],
                    [
                        "title"=> "Mobile Developer",
                      "location"=> "Mississauga",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP080"
                    ],
                    [
                        "title"=> "Software Engineer",
                      "location"=> "Toronto",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP081"
                    ],
                    [
                        "title"=> "Data Analyst",
                      "location"=> "Vancouver",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP082"
                    ],
                    [
                        "title"=> "Project Manager",
                      "location"=> "Montreal",
                      "job_type"=> "contract",
                      "company_id"=> "COMP083"
                    ],
                    [
                        "title"=> "UI/UX Designer",
                      "location"=> "Calgary",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP084"
                    ],
                    [
                        "title"=> "Sales Executive",
                      "location"=> "Edmonton",
                      "job_type"=> "part-time",
                      "company_id"=> "COMP085"
                    ],
                    [
                        "title"=> "Marketing Specialist",
                      "location"=> "Winnipeg",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP086"
                    ],
                    [
                        "title"=> "HR Manager",
                      "location"=> "Ottawa",
                      "job_type"=> "contract",
                      "company_id"=> "COMP087"
                    ],
                    [
                        "title"=> "DevOps Engineer",
                      "location"=> "Quebec City",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP088"
                    ],
                    [
                        "title"=> "Business Analyst",
                      "location"=> "Toronto",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP089"
                    ],
                    [
                        "title"=> "Customer Support Representative",
                      "location"=> "Halifax",
                      "job_type"=> "part-time",
                      "company_id"=> "COMP090"
                    ],
                    [
                        "title"=> "Operations Manager",
                      "location"=> "St. John's",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP091"
                    ],
                    [
                        "title"=> "IT Support Specialist",
                      "location"=> "Toronto",
                      "job_type"=> "contract",
                      "company_id"=> "COMP092"
                    ],
                    [
                        "title"=> "Front-end Developer",
                      "location"=> "Montreal",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP093"
                    ],
                    [
                        "title"=> "Accountant",
                      "location"=> "Vancouver",
                      "job_type"=> "part-time",
                      "company_id"=> "COMP094"
                    ],
                    [
                        "title"=> "Legal Advisor",
                      "location"=> "Ottawa",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP095"
                    ],
                    [
                        "title"=> "Technical Writer",
                      "location"=> "Victoria",
                      "job_type"=> "contract",
                      "company_id"=> "COMP096"
                    ],
                    [
                        "title"=> "Database Administrator",
                      "location"=> "Regina",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP097"
                    ],
                    [
                        "title"=> "Network Engineer",
                      "location"=> "Saskatoon",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP098"
                    ],
                    [
                        "title"=> "Content Creator",
                      "location"=> "Kelowna",
                      "job_type"=> "part-time",
                      "company_id"=> "COMP099"
                    ],
                    [
                        "title"=> "Mobile Developer",
                      "location"=> "Mississauga",
                      "job_type"=> "full-time",
                      "company_id"=> "COMP100"
                    ],
                    [
                        "title"=> "DevOps Engineer",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP201"
                    ],
                    [
                        "title"=> "UI/UX Designer",
                        "location"=> "Toronto",
                        "job_type"=> "contract",
                        "company_id"=> "COMP202"
                    ],
                    [
                        "title"=> "Software Engineer",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP203"
                    ],
                    [
                        "title"=> "Data Analyst",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP204"
                    ],
                    [
                        "title"=> "Project Manager",
                        "location"=> "Toronto",
                        "job_type"=> "part-time",
                        "company_id"=> "COMP205"
                    ],
                    [
                        "title"=> "Network Engineer",
                        "location"=> "Toronto",
                        "job_type"=> "contract",
                        "company_id"=> "COMP206"
                    ],
                    [
                        "title"=> "Front-end Developer",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP207"
                    ],
                    [
                        "title"=> "Technical Writer",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP208"
                    ],
                    [
                        "title"=> "IT Support Specialist",
                        "location"=> "Toronto",
                        "job_type"=> "part-time",
                        "company_id"=> "COMP209"
                    ],
                    [
                        "title"=> "Operations Manager",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP210"
                    ],
                    [
                        "title"=> "Mobile Developer",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP211"
                    ],
                    [
                        "title"=> "Software Engineer",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP212"
                    ],
                    [
                        "title"=> "Business Analyst",
                        "location"=> "Kelowna",
                        "job_type"=> "contract",
                        "company_id"=> "COMP213"
                    ],
                    [
                        "title"=> "Database Administrator",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP214"
                    ],
                    [
                        "title"=> "Customer Support Representative",
                        "location"=> "Kelowna",
                        "job_type"=> "part-time",
                        "company_id"=> "COMP215"
                    ],
                    [
                        "title"=> "Sales Executive",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP216"
                    ],
                    [
                        "title"=> "Marketing Specialist",
                        "location"=> "Toronto",
                        "job_type"=> "contract",
                        "company_id"=> "COMP217"
                    ],
                    [
                        "title"=> "HR Manager",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP218"
                    ],
                    [
                        "title"=> "Data Analyst",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP219"
                    ],
                    [
                        "title"=> "Software Engineer",
                        "location"=> "Kelowna",
                        "job_type"=> "contract",
                        "company_id"=> "COMP220"
                    ],
                    [
                        "title"=> "Mobile Developer",
                        "location"=> "Kelowna",
                        "job_type"=> "part-time",
                        "company_id"=> "COMP221"
                    ],
                    [
                        "title"=> "Network Engineer",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP222"
                    ],
                    [
                        "title"=> "UI/UX Designer",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP223"
                    ],
                    [
                        "title"=> "Legal Advisor",
                        "location"=> "Toronto",
                        "job_type"=> "contract",
                        "company_id"=> "COMP224"
                    ],
                    [
                        "title"=> "Content Creator",
                        "location"=> "Toronto",
                        "job_type"=> "part-time",
                        "company_id"=> "COMP225"
                    ],
                    [
                        "title"=> "Technical Writer",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP226"
                    ],
                    [
                        "title"=> "Project Manager",
                        "location"=> "Kelowna",
                        "job_type"=> "contract",
                        "company_id"=> "COMP227"
                    ],
                    [
                        "title"=> "IT Support Specialist",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP228"
                    ],
                    [
                        "title"=> "DevOps Engineer",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP229"
                    ],
                    [
                        "title"=> "Database Administrator",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP230"
                    ],
                    [
                        "title"=> "Software Engineer",
                        "location"=> "Kelowna",
                        "job_type"=> "part-time",
                        "company_id"=> "COMP231"
                    ],
                    [
                        "title"=> "Front-end Developer",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP232"
                    ],
                    [
                        "title"=> "Mobile Developer",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP233"
                    ],
                    [
                        "title"=> "Software Engineer",
                        "location"=> "Toronto",
                        "job_type"=> "contract",
                        "company_id"=> "COMP234"
                    ],
                    [
                        "title"=> "Business Analyst",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP235"
                    ],
                    [
                        "title"=> "Sales Executive",
                        "location"=> "Kelowna",
                        "job_type"=> "part-time",
                        "company_id"=> "COMP236"
                    ],
                    [
                        "title"=> "Data Analyst",
                        "location"=> "Kelowna",
                        "job_type"=> "contract",
                        "company_id"=> "COMP237"
                    ],
                    [
                        "title"=> "Project Manager",
                        "location"=> "Toronto",
                        "job_type"=> "contract",
                        "company_id"=> "COMP238"
                    ],
                    [
                        "title"=> "Operations Manager",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP239"
                    ],
                    [
                        "title"=> "IT Support Specialist",
                        "location"=> "Toronto",
                        "job_type"=> "part-time",
                        "company_id"=> "COMP240"
                    ],
                    [
                        "title"=> "HR Manager",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP241"
                    ],
                    [
                        "title"=> "Database Administrator",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP242"
                    ],
                    [
                        "title"=> "Legal Advisor",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP243"
                    ],
                    [
                        "title"=> "Front-end Developer",
                        "location"=> "Toronto",
                        "job_type"=> "contract",
                        "company_id"=> "COMP244"
                    ],
                    [
                        "title"=> "Software Engineer",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP245"
                    ],
                    [
                        "title"=> "Technical Writer",
                        "location"=> "Kelowna",
                        "job_type"=> "contract",
                        "company_id"=> "COMP246"
                    ],
                    [
                        "title"=> "DevOps Engineer",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP247"
                    ],
                    [
                        "title"=> "Software Engineer",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP248"
                    ],
                    [
                        "title"=> "Data Analyst",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP249"
                    ],
                    [
                        "title"=> "Mobile Developer",
                        "location"=> "Kelowna",
                        "job_type"=> "part-time",
                        "company_id"=> "COMP250"
                    ],
                    [
                        "title"=> "Project Manager",
                        "location"=> "Toronto",
                        "job_type"=> "contract",
                        "company_id"=> "COMP251"
                    ],
                    [
                        "title"=> "HR Manager",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP252"
                    ],
                    [
                        "title"=> "Operations Manager",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP253"
                    ],
                    [
                        "title"=> "Software Engineer",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP254"
                    ],
                    [
                        "title"=> "Data Analyst",
                        "location"=> "Toronto",
                        "job_type"=> "contract",
                        "company_id"=> "COMP255"
                    ],
                    [
                        "title"=> "Database Administrator",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP256"
                    ],
                    [
                        "title"=> "Mobile Developer",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP257"
                    ],
                    [
                        "title"=> "UI/UX Designer",
                        "location"=> "Toronto",
                        "job_type"=> "contract",
                        "company_id"=> "COMP258"
                    ],
                    [
                        "title"=> "IT Support Specialist",
                        "location"=> "Kelowna",
                        "job_type"=> "part-time",
                        "company_id"=> "COMP259"
                    ],
                    [
                        "title"=> "DevOps Engineer",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP260"
                    ],
                    [
                        "title"=> "Legal Advisor",
                        "location"=> "Toronto",
                        "job_type"=> "contract",
                        "company_id"=> "COMP261"
                    ],
                    [
                        "title"=> "Network Engineer",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP262"
                    ],
                    [
                        "title"=> "Software Engineer",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP263"
                    ],
                    [
                        "title"=> "Project Manager",
                        "location"=> "Toronto",
                        "job_type"=> "contract",
                        "company_id"=> "COMP264"
                    ],
                    [
                        "title"=> "Business Analyst",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP265"
                    ],
                    [
                        "title"=> "Content Creator",
                        "location"=> "Toronto",
                        "job_type"=> "part-time",
                        "company_id"=> "COMP266"
                    ],
                    [
                        "title"=> "Sales Executive",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP267"
                    ],
                    [
                        "title"=> "Software Engineer",
                        "location"=> "Kelowna",
                        "job_type"=> "contract",
                        "company_id"=> "COMP268"
                    ],
                    [
                        "title"=> "Database Administrator",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP269"
                    ],
                    [
                        "title"=> "Technical Writer",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP270"
                    ],
                    [
                        "title"=> "Network Engineer",
                        "location"=> "Toronto",
                        "job_type"=> "contract",
                        "company_id"=> "COMP271"
                    ],
                    [
                        "title"=> "Mobile Developer",
                        "location"=> "Kelowna",
                        "job_type"=> "part-time",
                        "company_id"=> "COMP272"
                    ],
                    [
                        "title"=> "Software Engineer",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP273"
                    ],
                    [
                        "title"=> "Business Analyst",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP274"
                    ],
                    [
                        "title"=> "IT Support Specialist",
                        "location"=> "Toronto",
                        "job_type"=> "contract",
                        "company_id"=> "COMP275"
                    ],
                    [
                        "title"=> "Front-end Developer",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP276"
                    ],
                    [
                        "title"=> "Software Engineer",
                        "location"=> "Kelowna",
                        "job_type"=> "contract",
                        "company_id"=> "COMP277"
                    ],
                    [
                        "title"=> "Customer Support Representative",
                        "location"=> "Toronto",
                        "job_type"=> "part-time",
                        "company_id"=> "COMP278"
                    ],
                    [
                        "title"=> "Marketing Specialist",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP279"
                    ],
                    [
                        "title"=> "Software Engineer",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP280"
                    ],
                    [
                        "title"=> "Operations Manager",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP281"
                    ],
                    [
                        "title"=> "Database Administrator",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP282"
                    ],
                    [
                        "title"=> "HR Manager",
                        "location"=> "Toronto",
                        "job_type"=> "contract",
                        "company_id"=> "COMP283"
                    ],
                    [
                        "title"=> "Mobile Developer",
                        "location"=> "Kelowna",
                        "job_type"=> "part-time",
                        "company_id"=> "COMP284"
                    ],
                    [
                        "title"=> "DevOps Engineer",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP285"
                    ],
                    [
                        "title"=> "UI/UX Designer",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP286"
                    ],
                    [
                        "title"=> "Sales Executive",
                        "location"=> "Kelowna",
                        "job_type"=> "contract",
                        "company_id"=> "COMP287"
                    ],
                    [
                        "title"=> "Business Analyst",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP288"
                    ],
                    [
                        "title"=> "Software Engineer",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP289"
                    ],
                    [
                        "title"=> "Marketing Specialist",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP290"
                    ],
                    [
                        "title"=> "Database Administrator",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP291"
                    ],
                    [
                        "title"=> "Network Engineer",
                        "location"=> "Toronto",
                        "job_type"=> "contract",
                        "company_id"=> "COMP292"
                    ],
                    [
                        "title"=> "Mobile Developer",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP293"
                    ],
                    [
                        "title"=> "Front-end Developer",
                        "location"=> "Kelowna",
                        "job_type"=> "part-time",
                        "company_id"=> "COMP294"
                    ],
                    [
                        "title"=> "DevOps Engineer",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP295"
                    ],
                    [
                        "title"=> "Software Engineer",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP296"
                    ],
                    [
                        "title"=> "Data Analyst",
                        "location"=> "Toronto",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP297"
                    ],
                    [
                        "title"=> "Project Manager",
                        "location"=> "Kelowna",
                        "job_type"=> "contract",
                        "company_id"=> "COMP298"
                    ],
                    [
                        "title"=> "Software Engineer",
                        "location"=> "Kelowna",
                        "job_type"=> "full-time",
                        "company_id"=> "COMP299"
                    ],
                    [
                        "title"=> "IT Support Specialist",
                        "location"=> "Toronto",
                        "job_type"=> "part-time",
                        "company_id"=> "COMP300"
                    ]
                ];
        foreach ($data as $item) {
            DB::table('companies')->updateOrInsert(
                ['name' => $item['company_id']],
                [
                    'name' => $item['company_id'],
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );
            DB::table('positions')->insert([
                'job_title' => $item['title'],
                'location' => $item['location'],
                'job_type' => $item['job_type'],
                'is_mock_data' => true,
                'company_id' => DB::table('companies')->where('name', $item['company_id'])->value('id'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
