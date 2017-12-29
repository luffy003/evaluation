<?php
include('header.php');
include('dist/includes/dbcon.php');
include('dist/php/module.php');
?>

<style type="text/css">
    select, input{
        display: block;
        width: 100%;
        padding: .5rem .75rem;
        font-size: 1rem;
        line-height: 1.25;
        color: #495057;
        background-color: #fff;
        background-image: none;
        background-clip: padding-box;
        border: 1px solid rgba(0,0,0,.15);
        border-radius: .25rem;
        transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    }
    .paginate_button{
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border: 1px solid transparent;
        padding: .5rem .75rem;
        font-size: 1rem;
        line-height: 1.25;
        border-radius: .25rem;
        transition: all .15s ease-in-out;
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    } 

    #header_wrap{
        text-align: center;
    }
    #title_wrap{
        text-align: center;
    }
    #cbo_wrap{
        width: 200px;
    }
</style>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<body class="corporate">
    <!-- BEGIN STYLE CUSTOMIZER -->
    <!-- END BEGIN STYLE CUSTOMIZER --> 

    <!-- BEGIN TOP BAR -->
    <?php include 'contact_top.php'; ?>
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <?php include 'header_nav.php'; ?>
    <!-- Header END -->

    <div class="main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Evaluation Form </li>
            </ul>
            <!-- BEGIN SIDEBAR & CONTENT -->
            <div class="row margin-bottom-40">
                <!-- BEGIN CONTENT -->
                <div class="col-md-12 col-sm-12">
                    <div class="content-page">
                        <div class="row margin-bottom-30">
                            <!-- BEGIN INFO BLOCK -->               
                            <div class="col-md-12">
                            </div>

                            <div class="content-wrapper">
                                <div class="container-fluid">
                                    <!-- Breadcrumbs-->
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">

                                        </li>
                                        <!-- <li class="breadcrumb-item active">Students</li> -->
                                    </ol>
                                    <div class="container">
                                        <div id="header_wrap">
                                            Republic of the Philippines <br>
                                            <b>CARLOS HILADO MEMORIAL STATE COLLEGE</b> <br>
                                            <?php echo CAMPUS ?>, Negros Occidental
                                        </div>
                                        <br>
                                        <div id="title_wrap">
                                            <strong>ANSWER SHEET</strong> <br>
                                            Faculty Performance Evaluation Online for Students<br>
                                        </div>
                                        <br>
                                        <div id="info_wrap">
                                            <table align="center">
                                                <tr>
                                                    <td>Faculty Name:</td>
                                                    <td>
                                                        <select class="form-control" id="cbo_wrap">
                                                            <option>-select-</option>
                                                            <?php
                                                            $faculty_qry = mysqli_query($con, "SELECT * FROM faculty ORDER BY faculty_last, faculty_first") or die(mysqli_error());

                                                            while ($row = mysqli_fetch_array($faculty_qry)) {
                                                                echo "<option value=" . $row['faculty_id'] . ">" . $row['faculty_last'] . ", " . $row['faculty_first'] . "</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </td>
                                                    <td width="20%"></td>
                                                    <td>Semester:</td>
                                                    <td>
                                                        <select name="semester" id="semester" class="form-control" onchange="doRefreshSchoolYear();">
                                                            <option>-select-</option>
                                                            <option value="1st">First Semester</option>
                                                            <option value="2nd">Second Semester</option>
                                                            <option value="Summer">Summer</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Subject:</td>
                                                    <td>
                                                        <select class="form-control">
                                                            <option>-select-</option>
                                                        </select>
                                                    </td>
                                                    <td></td>
                                                    <td>School Year:</td>
                                                    <td>
                                                        <div id="schoolyear_holder">
                                                        <select name="schoolyear" id="schoolyear" class="form-control">
                                                            <option>-select-</option>
                                                            <?php
                                                            schoolYearList($semester);
                                                            ?>	
                                                        </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <br>
                                        <div id="legend">
                                            <strong>Legend:</strong> <br>
                                            <strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 5 - Outstanding &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp (O)</strong> <br>
                                            <strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 4 - Very Satisfactory &nbsp &nbsp &nbsp (VS)</strong> <br>
                                            <strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 3 - Satisfactory &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp(S)</strong> <br>
                                            <strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 2 - Unsatisfactory &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp(UN)</strong> <br>
                                            <strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 1 - Poor &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp (P)</strong> <br>
                                            <br>
                                        </div>
                                        <!DOCTYPE html>
                                        <html>
                                            <head>
                                                <style>
                                                    #Commitment {
                                                        font-family: "Arial";
                                                        border-collapse: collapse;
                                                        width: 100%;
                                                    }

                                                    #Commitment td, #Commitment th {
                                                        border: 1px solid #ddd;
                                                        padding: 8px;
                                                    }

                                                    #Commitment tr:nth-child(even){background-color: #f2f2f2;}

                                                    #Commitment tr:hover {background-color: #ddd;}

                                                    #Commitment th {
                                                        padding-top: 12px;
                                                        padding-bottom: 12px;
                                                        background-color: #005627;
                                                        color: white;
                                                    }
                                                </style>
                                            </head>
                                            <body>
                                                <div id="teaching">
                                                    <strong>I. TEACHING EFFECTIVENESS</strong>
                                                </div>
                                                <table id="Commitment">
                                                    <tr>
                                                        <th>A.COMMITMENT</th>
                                                        <th align="center" width="10%">P</th>
                                                        <th align="center" width="10%">UN</th>
                                                        <th align="center" width="10%">S</th>
                                                        <th align="center" width="10%">VS</th>
                                                        <th align="center" width="10%">O</th>
                                                    </tr>
                                                    <tr>
                                                        <td>1. Demonstrate sensitivityto students' ability to attend and 
                                                            <br>absorb content information.</br></td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2. Integrate sensitively his/her learning objectives with those 
                                                            <br>of the students in a collaborative process.</br></td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3. Makes self available to students beyond official time.
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4. Regularly comes to class on time, well-groomed, and 
                                                            <br>well-prepared to complete assigned responsibilities.</br></td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5. Keep accurate records of students' performance and 
                                                            <br>prompt submission of the same.</br></td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right" width="50%">Total</td>
                                                        <td colspan="5" align="center" width="10%"></td>
                                                </table>

                                                </style>
                                                </head>
                                            <body>

                                                <table id="Commitment">
                                                    <tr>
                                                        <th>B.KNOWLEDGE OF SUBJECT</th>
                                                        <th align="center" width="10%">P</th>
                                                        <th align="center" width="10%">UN</th>
                                                        <th align="center" width="10%">S</th>
                                                        <th align="center" width="10%">VS</th>
                                                        <th align="center" width="10%">O</th>
                                                    </tr>
                                                    <tr>
                                                        <td>1. Demonstrate mastery of the subject matter (explain the subject 
                                                            <br>matter without relying solely on the prescribed textbook).</br></td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2. Draws and shares information on the state on the art  
                                                            <br>of theory and practice in his/her discipline.</br></td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3. Integrates subject to practical circumstances and 
                                                            <br>learning intents/purposes of the students.</br></td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4. Explains the relevance of present topics to the previous lessons, 
                                                            <br>and relates the subject matter to relevant current issues and/daily activities.</br></td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5. Demonstrates up-to-date knowledge and/or awareness on current  
                                                            <br>trends and issues of the subject.</br></td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right" width="50%">Total</td>
                                                        <td colspan="5" align="center" width="10%"></td>
                                                </table>

                                                <table id="Commitment">
                                                    <tr>
                                                        <th>C.TEACHING FOR INDEPENDENT LEARNING</th>
                                                        <th align="center" width="10%">P</th>
                                                        <th align="center" width="10%">UN</th>
                                                        <th align="center" width="10%">S</th>
                                                        <th align="center" width="10%">VS</th>
                                                        <th align="center" width="10%">O</th>
                                                    </tr>
                                                    <tr>
                                                        <td>1. Create teaching strategies that allow students to practice 
                                                            <br>using concepts they need to understand (interactive discussion).</br></td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2. Enhances student self-esteem and/or give due recognition to students' performance/potentials.</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3. Allows students to create their own course with objectives and realistically defined student-instructor rules and make them accountable for their performance.</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4. Allows student to think independently and make their own decisions and holding them accountable for their performance based largely on their success in executing decisions.</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5. Encourages students to learn beyond what is required and help/guide the students how to apply the concepts learned.</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right" width="50%">Total</td>
                                                        <td colspan="5" align="center" width="10%"></td>
                                                </table>

                                                <table id="Commitment">
                                                    <tr>
                                                        <th>D.MANAGEMENT OF LEARNING</th>
                                                        <th align="center" width="10%">P</th>
                                                        <th align="center" width="10%">UN</th>
                                                        <th align="center" width="10%">S</th>
                                                        <th align="center" width="10%">VS</th>
                                                        <th align="center" width="10%">O</th>
                                                    </tr>
                                                    <tr>
                                                        <td>1. Create opportunities for intensive and/or extensive contribution of students in the class activities (e.g. breaks class into dyads triads or buzz/task groups).</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2.Assumes roles as facilitator, resource person, coach, inquisitor, referee,in drawing students to contribute knowledge and understanding of the concepts at hand.</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3. Assumes various appropriate roles, (facilitator, coach, resource speaker, integrator, inquisitor, referee, etc.</td> 
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4. Structures/re-stuctures learning conditions and experience that promotes healthy exchange and/or confrontations.</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5. Uses instructional materials (audio-video materials: fieldtrips, film showing, computer aided instruction and etc.) to reinforce learning processes.</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">TOTAL ITEMS CIRCLED</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">TOTAL SCORES</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right" width="50%">OVERALL TOTAL</td>
                                                        <td colspan="5" align="center" width="10%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right" width="50%">AVERAGE</td>
                                                        <td colspan="5" align="center" width="10%"></td>
                                                    </tr>

                                                    </style>
                                                    </head>
                                                    <body>
                                                        <div id="teaching">
                                                        </div>
                                                        <table id="Commitment">
                                                            <tr>
                                                                <th>II. PROFESSIONALISM</th>
                                                                <th align="center" width="10%"></th>
                                                                <th align="center" width="10%"></th>
                                                                <th align="center" width="10%"></th>
                                                                <th align="center" width="10%"></th>
                                                                <th align="center" width="10%"></th>
                                                            </tr>

                                                            <tr>
                                                                <td>1. Is punctual in starting and ending classes on specified time.</td>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>3</td>
                                                                <td>4</td>
                                                                <td>5</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2.Attends classes regularly, absences are rare and reasonable.</td>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>3</td>
                                                                <td>4</td>
                                                                <td>5</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3.Has a happy attitude towards students.</td>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>3</td>
                                                                <td>4</td>
                                                                <td>5</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4.Is emotionally well-balanced.</td>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>3</td>
                                                                <td>4</td>
                                                                <td>5</td>
                                                            </tr>
                                                            <tr>
                                                                <td>5.Observes proper grooming.</td>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>3</td>
                                                                <td>4</td>
                                                                <td>5</td>
                                                            </tr>
                                                            <tr>
                                                                <td>6.Possesses self confidence and poise.</td>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>3</td>
                                                                <td>4</td>
                                                                <td>5</td>
                                                            </tr>
                                                            <tr>
                                                                <td>7.Has a pleasing personality.</td>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>3</td>
                                                                <td>4</td>
                                                                <td>5</td>
                                                            </tr>
                                                            <tr>
                                                                <td>8.Demonstrate high sense of responsibility.</td>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>3</td>
                                                                <td>4</td>
                                                                <td>5</td>
                                                            </tr>
                                                            <tr>
                                                                <td>9.Manifests initiative in one's work.</td>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>3</td>
                                                                <td>4</td>
                                                                <td>5</td>
                                                            </tr>
                                                            <tr>
                                                                <td>10.Practices professional values and attitudes.</td>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>3</td>
                                                                <td>4</td>
                                                                <td>5</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11.Sets good examples as a professional in words and actions.</td>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>3</td>
                                                                <td>4</td>
                                                                <td>5</td>
                                                            </tr>
                                                            <tr>
                                                                <td>12.Has a high sense of honesty to oneself and to others.</td>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>3</td>
                                                                <td>4</td>
                                                                <td>5</td>
                                                            </tr>
                                                            <tr>
                                                                <td>13.Is consistend in his/her good acts as a teacher.</td>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>3</td>
                                                                <td>4</td>
                                                                <td>5</td>
                                                            </tr>
                                                            <tr>
                                                                <td>14.Is looked up with respect by the students.</td>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>3</td>
                                                                <td>4</td>
                                                                <td>5</td>
                                                            </tr>
                                                            <tr>
                                                                <td>15.Treats students equally and fairly-like responsible and mature individuals.</td>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>3</td>
                                                                <td>4</td>
                                                                <td>5</td>
                                                            </tr>
                                                            <tr>
                                                                <td>16.Keeps himself easily available for advice and consultation.</td>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>3</td>
                                                                <td>4</td>
                                                                <td>5</td>
                                                            </tr>
                                                            <tr>
                                                                <td>17.Is fair and accept weaknesses of others.</td>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>3</td>
                                                                <td>4</td>
                                                                <td>5</td>
                                                            </tr>
                                                            <tr>
                                                                <td>18.Refrains from putting students, peers and superiors in bad light.</td>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>3</td>
                                                                <td>4</td>
                                                                <td>5</td>
                                                            </tr>
                                                            <tr>
                                                                <td>19.Abide by the policies and regulations of the college (wearing of proper uniform with ID's, non-smoking on campus, etc.).</td>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>3</td>
                                                                <td>4</td>
                                                                <td>5</td>
                                                            </tr>
                                                            <tr>
                                                                <td>20.Treats students with due respect.</td>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>3</td>
                                                                <td>4</td>
                                                                <td>5</td>
                                                            </tr>




                                                        </table>
                                                        <table>
                                                            <tr>
                                                            <br><br>
                                                            <strong>COMMENT:</strong><br>
                                                               <td><textarea class="form-control" cols="175" rows="8" id="comment_entered"> </textarea></td> 
                                                            </tr>
                                                        </table>
                                                    </body>
                                        </html>
                                    </div>
                                </div>
                                <footer class="sticky-footer">
                                    <div class="container">
                                        <div class="text-center">
                                            <small>Copyright © Faculty Evaluation 2017</small>
                                        </div>
                                    </div>
                                </footer>
                                <!-- Scroll to Top Button-->
                                <a class="scroll-to-top rounded" href="#page-top">
                                    <i class="fa fa-angle-up"></i>
                                </a>  
                            </div>
                        </div>
                        </body>
                        <script type="text/javascript">
                        </script>
                        <?php include('scripts.php'); ?>

                        </html>
<script>
    function doRefreshSchoolYear()
    {
        var semester = document.getElementById("semester").value;
        if ((semester != ""))
        {
            var result = getSchoolYearList("semester=" + semester);
            document.getElementById("schoolyear_holder").innerHTML = "<select name='schoolyear' id='schoolyear' class='form-text form-field-cbo' style='width: 130px;'>" + result + "</select>";
        }
        else
        {
            document.getElementById("schoolyear_holder").innerHTML = "<select name='schoolyear' id='schoolyear' class='form-text form-field-cbo' style='width: 130px;'><option value=''>-- Please Select --</option></select>";
        }
    }
</script>