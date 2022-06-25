@extends('layouts.withnav')

@section('title', '| Clubs of LU')

@section('stylesheet')
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fire-css/assets/faq.css') }}">
    <style>
        .fire_faq .faq_tab_menu .nav{
            padding: 10px;
            margin-bottom: 100px;
            border-radius: 8px;
            border: 0px solid;
            box-shadow: 0 0 15px 0px rgba(0, 0, 0, 0.1);
            max-height: 70vh;
            overflow-y: scroll;
            overflow-x: hidden;
        }
        .fire_faq .faq_tab_menu .nav>li>a.active, .fire_faq .faq_tab_menu .nav>li>a:focus, .fire_faq .faq_tab_menu .nav>li>a:hover{
            border-radius: 8px;
            background-color: #a3c624;
            font-weight: bold;
        }
        .fire_faq .faq_tab_menu .nav>li>a{
            border-bottom: 0px solid;
            margin-top: 3px;
            margin-bottom: 3px;
            font-weight: bold;
        }
        .fire_faq .faq_tab_content {
            box-shadow: 0 0 15px 0px rgba(0, 0, 0, 0.1);
            margin-left: 20px;
            margin-top: 23px;
            border-radius: 8px;
        }
    </style>
@endsection

@section('content')
    
 <section class="fire_faq" style="margin-top: 7rem;">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="faq_tab_menu clearfix">
                        

                        <div class="installation">
                            <ul role="tablist" class="nav nav-tabs">
                                <li class="nav-item"><a class="active" data-toggle="tab" href="#depof_bba" role="tab" aria-selected="false">Leading University Computer Club</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#depof_cse" role="tab" aria-selected="false">Leading University Social Services Club</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#depof_english" role="tab" aria-selected="false">Leading University Debating Club</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#depof_arc" role="tab" aria-selected="false">Leading University Model United Nation</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#depof_llb" role="tab" aria-selected="false">Leading University Electronics Club</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#depof_civil" role="tab" aria-selected="false">Leading University Cultural Club</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#depof_eee" role="tab" aria-selected="false">The Banned community</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#depof_islam" role="tab" aria-selected="false">Orpheus</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-9 col-lg-8">
                    <div class="faq_tab_content">
                        <div id="myTabContent" class="tab-content">

                            {{-- <!--BBA--> --}}
                            <div id="depof_bba" role="tabpanel" class="tab-pane fade show active">
                                <h4 class="fw_300 color_22">Leading University Computer Club</h4>
                                <div class="tab_text">
                                   <p>
                                        Hello, Welcome to Leading University Computer Club's. Please enjoy your stay with us & get updated. Feel free to ask any question.
                                        <ul>
                                            <li>
                                                    -- Give basic idea of computer,programming & many more.
                                            </li>
                                            <li>
                                                    -- Represent our university & our department throughout the whole country with the help of computer related events or program.
                                            </li>
                                            <li>
                                                    -- Develop students skills of Computer & communication.
                                            </li>
                                            <li>
                                                    -- Arrange Programming,gaming etc contest.
                                            </li>
                                        </ul>
                                        
                                    </p> 
                                </div>
                            </div>

                            {{-- <!--CSE--> --}}
                            <div id="depof_cse" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Department of CSE</h4>
                                <div class="tab_text">
                                    
                                    <p>Importance of Computer Science and Engineering for the development and progress of society, and the need for specialists in this field has become obvious in our daily life. The University acknowledges this importance and has therefore introduced Department of Computer Science & Engineering by giving all academic, financial and administrative support to the department.</p>
                                    <p><strong>Vision of the Program</strong></p>
                                    <p>To become a prominent department of Computer Science and Engineering producing competent professionals with research and innovation skills, including moral values and social concerns.</p>
                                    <p><strong>Mission of the Program:</strong></p>
                                    <p>The mission of the Computer Science and Engineering Department is to prepare students for careers as software professionals and for advanced studies in Computer Science and Engineering Filed. We develop and work with a range of technologies to build systems and applications that help solve today’s problems, and share skills and knowledge with the community.</p>
                                    <p>We are committed to providing the opportunity to master the computer science and Engineering discipline to students from all backgrounds. Our program combines strong fundamentals, project- and team- oriented activities, and soft skills, leading to a well-rounded professional education.</p>
                                    <h5>Academic Activities</h5>
                                    <p>Currently the Department offers Bachelor of Science (Honors) in Computer Science & Engineering program at undergraduate level and is looking forward to offer Master of Science in Computer Science & Engineering (M.Sc./M.Engg. in CSE) program at graduate level. Besides, CSE Department is offering General Education Courses in Computer Science to the students enrolled in other bachelor programs at the University.</p>
                                    <p><strong>Teaching Strategy:</strong></p>
                                    <p>Teachers of Computer Science & Engineering department use lecture, reading assignment, group assignment, role playing, presentation, students centered learning/ interactive teaching, seminar in theory courses and for practical courses they use demonstration, project / assignment, lab work. The teaching aids that are used by the teachers are: multimedia projector, whiteboard, overhead projector but now-a-days mostly multimedia projector.</p>

                                </div>
                            </div>

                            {{-- <!--ENGLISH--> --}}
                            <div id="depof_english" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Department of English</h4>
                                <div class="tab_text">
                                    <p>The Department of English, named as the Royal Department all over the globe, is one of the founding departments of Leading University which was established in 2001, offers a dynamic and supportive community of highly qualified and dedicated faculty members and number of vibrant students.  From the time of its inception the Department aims at producing good human being who will be able to think differently and will be capable of meeting up the demands and challenges of the fastest growing globalized world. The Department makes every effort to kindle humanistic learning with the capacity of rational and imaginative respond through the literature and language study.</p>

                                    <p>Starting with a bunch of promising students, the Department is now home to around 500 (five hundred) potential and innovative students. The Department of English is currently equipped with 12 (twelve) full time faculty members along with 8 (five) adjunct faculty members, who are immensely eligible, relentlessly hard working and committed, as the Department never compromises with excellence. Keeping in view with the ongoing literary trend and updated language teaching methodology, the Department offers diverse and modernized undergraduate and graduate courses which completes with in- depth dissertation.</p>

                                    <p>To enhance and continue the innovation and creativity of the students, the Department arranges various curricular activities like seminars, workshops, literary quiz competitions, literary and linguistic presentations, text based movie-shows, contests of speech and composition. To inflame the zeal of learning among the students the Department persistently encourages the extra-curricular activities like production of stage drama, reading books, annual tour, visits and trips, annual cultural programme etc.</p>

                                    <p>To broaden their outlook and to learn more than just classroom studies, the students are also involved with Sports Club, Debating Club, Social Services Club, Cultural Club, Creative Club, Photographic Society and BNCC etc. The Department of English provides classrooms with all modern equipment and facilities, including multimedia-projector, air condition, Wi-Fi connectivity etc. The students of the Department facilitate themselves with the vast collection of books on literature and linguistics in the central library and also have the access to the modern computer lab.</p>
                                </div>
                            </div>

                            {{-- <!--Arch--> --}}
                            <div id="depof_arc" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Department of Architecture </h4>
                                <div class="tab_text">
                                    <p>The Department of Architecture started its brave journey on 3rd February, 2007 in Leading University, Sylhet. The department offers five years undergraduate program leading to Bachelor of Architecture (B.ARCH) degree. At the very beginning there was a single batch to start with. At present five batches are performing their architectural studies in the department and the first batch has completed their graduation successfully. Currently there are ten faculty members conducting the classes with high efficiency and care. The architectural learning process is also adorned with direct lecture and supervisions of many visiting faculties and professional of the field. The teachers are always keen to give proper guidance and monitoring the students to ensure their academic excellence specially aspects regarding design works which are the prime elements in the process of learning architecture. To enhance the quality to flourish creativity, the department gives focus on idea based projects along with the practical examples. The students are provided with five large design studio rooms with other facilities. Besides, the other requirements needed for better learning are provided by the department with the direct participation of the University. The department has successfully arranged several open exhibitions with the student projects which are well appreciated by the spectators. It is very much pleasant to inform that the students of the department are now taking part in different architectural competitions and on December, 2011 a group of students of 4th semester were awarded with honorable mention prize in a design competition entitled Dwelling unit in 2062 organized by Bangladesh University of Engineering and Technology.</p>
                                </div>
                            </div>

                            {{-- <!--LLB--> --}}
                            <div id="depof_llb" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Department of LLB </h4>
                                <div class="tab_text">
                                    <p>The Law Department of Leading University is currently playing a very pivotal role towards the provision of high quality socially relevant and cutting- edge legal education through the introduction and setting up an exciting LL.B.(Hons.) and LL.M. program. This highly significant step is motivated to set up a center of excellence for law studies which not only addresses and provides meaningful solutions for pressing ground realities but it is capable of offering international standard legal education, research and analysis which is in tune with the latest development in these fields in the global arena.
                                    <br>
                                    <p>The law programs would endeavor to offer not just excellent professional education and research output but is expected to play a highly positive and productive role in bringing about social changes and reform in the legal system in promoting social responsibility, in stimulating intellectual dialogue, and debate with a view to strengthening the legal profession and judicial institution for the better promotion of justice and greater national and regional growth and progress.
                                    <br>
                                    <p>The profession of law has however undergone a metamorphosis in recent years so that law professionals are being increasingly expected to play a vital role in the economic regulation, corporate governance, economic and political policy -making and the restructuring of the state. Currently the Department of Law is offering 123 Credits consisting 12 semesters. In each year every student has to complete 3 semesters covering Spring, Summer & Fall<

                                    Law Department of Leading University vows to provide completely new and different set of skills also which, does not cover the traditional legal education only.</p>

                                    <p style="color: #000;"><strong>Programs Offered:</strong>

                                        <p>LL.B(Hons)
                                            <br>

                                            LL.M(Final)</p>

                                    <p style="color: #000;"><strong>Degree Requirements LL.B(Hons): </strong></p>
                                    <p>Total course requirements for degree program are 123 Credits<p>

                                    <p style="color: #000;"><strong>Degree Requirements LL.M(Final):</strong></p> 
                                    <p>Total course requirements for LL.M(Final)program are 35 Credits</p>
                                </div>
                            </div>

                             {{-- <!--Civil--> --}}
                            <div id="depof_civil" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Department of Civil Engineering </h4>
                                <div class="tab_text">
                                    <p>The Department of Civil Engineering is the first department in this field in Sylhet among all private universities. It was established in 2008. The department offers four year undergraduate program leading to B.Sc. in Civil Engineering degree. At present we have six batches and 200 students. The Department offers 60 undergraduate courses to the respective students. There are 9 full time faculty members dedicated in teaching the students of this department as well as the students of other departments of LU. We also employ highly experienced teachers and professional experts from other Universities, Colleges and Firms. We care for our students and our teachers are highly professionals. Most of our teachers have foreign degrees. Department offices, lecture halls and most of the labs are housed in the School of Engineering floor of the campus.
                                    <br>
                                    <strong style="color: #000;">Civil Engineering Career Overview</strong>
                                    <br>
                                    Civil engineers are involved in monitoring and guiding as well as devising and designing the building of roads, girders, bridges, airports, harbours, tunnels, dams, water & sewage systems, buildings and other structures. Civil engineering is one of the oldest disciplines of engineering and contains a variety of specialties like structural, water related, environmental, transportation and geo-technical engineering.  Civil engineers are responsible for planning and designing a project, constructing the project to the required scale, and maintenance of the product. Civil engineers require not only a high standard of engineering knowledge but also supervisory and administrative skills. Administrative or supervisory jobs are held by many civil engineers while others work in devising, composing, constructing, researching and teaching jobs. The period through 2015 is projected to hold growth and potential for civil engineers. Due to the growth of population and the need for better infrastructural as well as planning, civil engineers will be required to build and design larger and safer buildings, complexes, transport facilities, as well as more durable water supply, sewage and pollution control mechanisms. Controlling environmental pollution, managing traffic congestion, improving road safety, and disaster management will be a big challenge. Repairing existing roads, dams and other public conveniences will also be a major work allotment.
                                    <br>
                                    <strong style="color: #000;">Prospective Students</strong>
                                    <br>
                                    We offer four year undergraduate program leading to B.Sc. in Civil Engineering degree. The undergraduate curriculum at this department is based on Course System. The total academic calendar is segmented in to four years and twelve semesters, where three semesters make a year.
                                    <br>

                                    <strong style="color: #000;">Services (RTCG)</strong>
                                    <br>
                                    We are planning to develop testing and consultancy services. The services will be provided by Research Testing and Consultancy Group (RTCG), Sylhet. These consultancies will be run under four divisional supervision. They are: Environmental Engineering, Structural  Engineering, Geotechnical Engineering, and Transportation Engineering. A number of testing of different construction materials will be carried out here under the above divisional supervision. We have well-equipped laboratories, facilities and expertise for detailed testing, analysis for better engineering solutions.
                                    <br>
                                    Material that will be tested here are: Aggregate, Bricks, Bitumen, Cement, Cement Concrete, Gauges, R.C.C Pipes, Steel, Soil, Geotextile, Rubber/Plustic/PVC materials, Water ( Drinking water, Agriculture use, Pollution Study, Miscellaneous parameters), Environment Quality of soil.</p>
                                </div>
                            </div>

                              {{-- <!--EEE--> --}}
                            <div id="depof_eee" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Department of EEE </h4>
                                <div class="tab_text">
                                    <p>Importance of Electrical & Electronic Engineering for the development and progress of society, and the need for specialists in this field has become obvious in our daily life. The University acknowledges this importance and has therefore introduced Department of Electrical & Electronic Engineering by giving all academic, financial and administrative support to the department.
                                    <br>
                                    <strong>Academic Activities</strong>
                                    <br>
                                    Currently the Department offers Bachelor of Science (Engg.) program at undergraduate level and is looking forward to offer Master of Computer Applications (MCA) program at graduate level. Besides, CSE and EEE Department is offering General Education Courses to the students enrolled in other bachelor programs at the University.
                                    <br>
                                    <strong>Programs Offered</strong>
                                    <br>
                                    Bachelor of Science (Engg.) in Electrical & Electronic Engineering
                                    <br>
                                    Degree Requirements (B. Sc. in Electrical & Electronic Engineering): 
                                    <br>
                                    Total course requirements for degree program are as follows(Summary of Courses):
                                    </p>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td> Types of Courses</td>    
                                                <td>No. Of Courses</td>
                                                <td>Credit Hours</td>
                                            </tr>
                                            
                                            <tr>
                                                 <td>English Courses</td> 
                                                <td> 3 </td>
                                                 <td> 9 </td>
                                            </tr>
                                            <tr>
                                                 <td>GED courses</td> 
                                                 <td>5</td>
                                                 <td>15</td>
                                            </tr>
                                            <tr>
                                                 <td>Basic Science Courses</td>   
                                                 <td>3</td>
                                                 <td>9</td>
                                            </tr>
                                            <tr>
                                                 <td>Mathematics Courses</td> 
                                                 <td>5</td>
                                                 <td>15</td>
                                            </tr>         
                                            <tr>
                                                <td>Computer Courses</td>    
                                                <td>6</td>
                                                <td>18</td>
                                            </tr>
                                            <tr>
                                                <td>Inter disciplinary Engineering Courses</td>  
                                                <td>2</td>
                                                <td>6</td>
                                            </tr>
                                            <tr>
                                                <td>Program core courses</td>    
                                                <td>30</td>
                                                <td>55</td>
                                            </tr>
                                            <tr>
                                                <td>Major elective courses</td>  
                                                <td>5</td>
                                                <td>15</td>
                                            </tr>
                                            <tr>
                                                <td>Minor Elective courses</td>  
                                                <td>5</td>
                                                <td>15</td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td>64</td>
                                                <td>157</td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            

                              {{-- <!--IS--> --}}
                            <div id="depof_islam" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Department of Islamic Studies</h4>
                                <div class="tab_text">
                                    <p>The increasing demand of Islamic knowledge for financial and economical activities, tempting new and suitable academic courses. The objective of the courses BA (Honors) Islamic Studies (Major in Islamic Economics and Banking) is to provide students a complete knowledge of Islamic Economics and Banking as well as code of life based on the revealed knowledge. The curriculum is designed to enable students to have a comprehensive world view on Islam as an ideal system and its role in the development of human life and resolve current issues using Islamic tradition according to teaching and practical guidance of the Qur’an and Sunnah.
                                    <br>
                                    <strong>Program Content:</strong> 
                                    <br>
                                    The B.A. (Honours) program shall extend over 04 years of study. It shall consist of 42 courses of 126 Credit hours. The B.A. (Honours) program consists of (i) Core Courses, (ii) General Education Courses (GED), (iii) Major Courses. The core courses are designed to build modern and effective knowledge in the subject. The general education courses are introduced to enhance the students’ basic knowledge in humanities and science. The major courses are to introduce the students in the perspective of basic needs and knowledge in the field of Islam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    

@endsection

@section('scripts')
//Extra Script Files Here
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script>
    $(".fire_faq .faq_tab_menu .nav").niceScroll();
</script>

@endsection
