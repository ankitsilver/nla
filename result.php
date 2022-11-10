<?php
    $asmt_id = null;
    session_start();
    if(isset($_REQUEST['asmt_id']) && !empty($_REQUEST['asmt_id'])){
        $asmt_id = $_REQUEST['asmt_id'];
        unset($_SESSION['asmt_linkid']);
        unset($_SESSION['asmt_uid']);
        unset($_SESSION['asmt_type']);
    }
    else {
        echo "<center><h3>404 Assessment Report Not Found</h3></center>";
        exit;
    }
?>
<!doctype html>
    <head>
        <title>SilverOakHealth</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Silver Oak Health - HR Dashboard">
        <meta name="author" content="Silver Oak Health">
        <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.png">
        <link href="../../assets/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="../../assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,500,700" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../../assets/css/dashforge.css">
        <link rel="stylesheet" href="../../assets/css/dashforge.auth.css">
        <script src="../../assets/js/config.js"></script>
        <style>
        .td-label {
            text-align: center;
            min-width: 30%;
        }

        .td-label6 {
            text-align: center;
            min-width: 15%;
        }

        .td-label2 {
            text-align: center;
            min-width: 45%;
        }

        .td-label5 {
            text-align: center;
            min-width: 18%;
        }

        .red-caption-error {
            color: red !important;
            padding: 11px 0 9px 0;
            float: left;
            display: inline-block;
            font-size: 16px;
            line-height: 28px;
        }

        .green-caption {
            color: #2c3e50 !important;
            float: left;
            display: inline-block;
            font-size: 16px;
            line-height: 28px;
        }

        .red-error {
            color: red;
        }

        .note.note-info {
            background-color: #EFF3F8;
            border-color: transparent;
            color: #31708f;
        }

        .note.note-info.note-bordered {
            background-color: #EFF3F8;
            border-color: transparent;
        }

        .table.table-light>tbody>tr>td {
            font-family: inherit;
            color: black;
            font-size: 14px;
        }

        .submit-btn {
            background-color: #3AB149;
            color: white;
            text-transform: uppercase;
            font-weight: 700;
            font-size: 14px;
            padding: 20px 40px 20px 40px;
            border-radius: 6px;
            font-family: Lato;
            border-width: 0;
            outline: none !important;
        }

        .portlet.light>.portlet-title {
            min-height: 35px;
        }

        .portlet.light {
            padding: 5px 20px 0px 20px;
        }

        .table td {
            vertical-align: top;
        }

        .select2-selection__choice {
            background-color: #8ebe3f !important;
        }

        .select2-selection__choice__remove {
            color: white !important;
            font-weight: 800 !important;
            font-size: 1rem !important;
        }

        .select2-selection__choice__remove:hover {
            color: black !important;
        }

        .select2-search__field {
            height: 30px !important;
        }

        textarea {
            border-radius: 6px;
            margin-top: 6px;
            padding: 4px;
        }

        label {
            max-width: 120%;
        }

        .hide {
            display: none;
        }

        select {
            text-transform: capitalize;
        }

        .options {
            padding: 5px;
            margin-top: 0px;
            margin-bottom: 0px;

        }

        .aline-center {
            vertical-align: middle;

        }


        .radio-label-vertical-wrapper {
            padding-bottom: 13px;
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
        }

        .radio-label-vertical-wrapper:before {
            content: ' ';
            display: block;
            width: 100%;
            height: 30px;
            background: #efefef;
            position: absolute;
            bottom: 0;
        }

        .radio-label-vertical-wrapper label:not(.radio-label-vertical) {
            display: block;
            width: 100%;
        }

        .radio-label-vertical {
            position: relative;
            display: inline-block;
            vertical-align: middle;
            padding: 10px 15px;
            text-align: center;
        }

        .radio-label-vertical input {
            position: absolute;
            top: 28px;
            left: 50%;
            margin-left: -6px;
            display: block;
            cursor: pointer;
        }
        .radio-label-vertical-wrapper {
            padding-bottom: 13px;
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
        }

        .radio-label-vertical-wrapper:before {
            content: ' ';
            display: block;
            width: 100%;
            height: 30px;
            background: #efefef;
            position: absolute;
            bottom: 0;
        }

        .radio-label-vertical-wrapper label:not(.radio-label-vertical) {
            display: block;
            width: 100%;
        }

        .radio-label-vertical {
            position: relative;
            display: inline-block;
            vertical-align: middle;
            padding: 10px 15px;
            text-align: center;
        }

        .radio-label-vertical input {
            position: absolute;
            top: 28px;
            left: 50%;
            margin-left: -6px;
            display: block;
            cursor: pointer;
        }
        .table  td {
        vertical-align:top;
        }
        .segmented-button label {
            width:150px !important;
        }
        .opening_remarks {
            font-size: 16px;
            text-align: justify;
        }
        .form-check-input:checked {
            background-color: #8ebe3f;
            border-color: #8ebe3f;
        }
    </style>
    </head>
    <body style="font-family:Open Sans" id='form'>
        <div class="content content-auth">
            <div class="container" style="max-width:100% ">
                <div class="row">
                    <!-- logo -->
                    <div class="col">
                        <div class="media align-items-stretch justify-content-center ht-150p pos-relative">
                            <div class="sign-wrapper" style="display: flex; justify-content: center;">
                                <a href="index.php" class="df-logo mg-t-25 ht-20p"><img src="../../assets/img/logo.png" height="80px" width="100px" /></a>
                            </div>
                        </div>
                    </div>
                    <!-- main form -->
                    <div class=" col-xs-12 col-md-12 col-sm-12 col-lg-12 ">
                        <div class="media align-items-stretch justify-content-center ht-150p pos-relative">
                            <div class="sign-wrapper" style="display: block; width:60%">
                                <h5 class="tx-color-01 text-center mt-5" style="color:#383838; display:none" id="asmtscore"></h5>
                                <div class="mt-5 border border-dark " style="width: 100%; padding: 5px 55px 25px 55px ; border-radius:10px; display: none;" id="asmt_common">   
                                    <div class="text-center mx-5">
                                        <form action="" method="POST" id="result">
                                            <div class="form-group">
                                                <label for="score" class="display-3"><b id="score"></b></label>
                                                <label for="score">Your Score</label>
                                            </div>
                                        </form>
                                    </div>  
                                <div class="card-group text-center mt-5" id ="asq-scoring" style="display: none;">
                                    <div class="card " style="border-top: 6px solid #8AFF8A;">
                                        <div class="card-body">
                                            <h5 class="card-title">Normal</h5>
                                            <p class="card-text">0</p>
                                        </div>
                                    </div>
                                    <div class="card" style="border-top: 6px solid  #FF3232 ;">
                                        <div class="card-body">
                                            <h5 class="card-title">Higher Risk</h5>
                                            <p class="card-text">1 or higher </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- rtc start -->
                                <div class="card-group text-center mt-5" id="rtc-scoring" style="display: none;">
                                    <div class="card" style="border-top: 6px solid #FFFF5C ;">
                                        <div class="card-body">
                                            <h5 class="card-title">Mild Anxiety</h5>
                                            <p class="card-text">1-3</p>
                                        </div>
                                    </div>
                                    <div class="card" style="border-top: 6px solid #FFC55C ;">
                                        <div class="card-body">
                                            <h5 class="card-title">Moderate Anxiety</h5>
                                            <p class="card-text">4-6</p>
                                        </div>
                                    </div>
                                    <div class="card" style="border-top: 6px solid  #FF3232 ;">
                                        <div class="card-body">
                                            <h5 class="card-title">Severe Anxiety</h5>
                                            <p class="card-text">7-9</p>
                                        </div>
                                    </div>
                                </div>
                                <!--rtc complete-->
                                <!-- pss start -->
                                <div class="card-group text-center mt-5" id="pss-scoring" style="display: none;">
                                    <div class="card" style="border-top: 6px solid #FFFF5C ;">
                                        <div class="card-body">
                                            <h5 class="card-title">Low Stress</h5>
                                            <p class="card-text">0-13</p>
                                        </div>
                                    </div>
                                    <div class="card" style="border-top: 6px solid #FFC55C ;">
                                        <div class="card-body">
                                            <h5 class="card-title">Moderate Stress</h5>
                                            <p class="card-text">14-26</p>
                                        </div>
                                    </div>
                                    <div class="card" style="border-top: 6px solid  #FF3232 ;">
                                        <div class="card-body">
                                            <h5 class="card-title">High Perceived Stress</h5>
                                            <p class="card-text">27-40</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- pss complete -->
                                <!-- ptsd start -->
                                <div class="card-group text-center mt-5" id="ptsd-scoring" style="display: none;">
                                    <div class="card" style="border-top: 6px solid #8AFF8A ;">
                                        <div class="card-body">
                                            <h5 class="card-title">Not a Symptoms of PTSD.</h5>
                                            <p class="card-text">31-33 or Lower</p>
                                        </div>
                                    </div>
                                    <div class="card" style="border-top: 6px solid  #FF3232 ;">
                                        <div class="card-body">
                                            <h5 class="card-title">Prone to PTSD</h5>
                                            <p class="card-text">31-33 or higher</p>
                                        </div>
                                    </div> 
                                </div>
                                <!-- ptsd complete -->
                            </div>

                            <!-- mini-mse start -->
                            <div class="page-container" id="minimse-scoring" style="display: none;">
                                        <div class="page-content">
                                            <div class="container">
                                                <form class="CG-form" id="mse_questions_form">
                                                    <div class="row row-xs">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-10">
                                                            <h2 class="text-center mb-4" style="color:#8ebe3f;">Mini-Mental State Examination - Result</h2>
                                                        </div>

                                                    </div>
                                                    <div class="row row-xs border border-dark py-4">
                                                        <div class="col w-100 py-4">
                                                            <div class="portlet light">
                                                                <div class="portlet-body">
                                                                    <table style="max-width:100%" class="table">
                                                                        <tr class="form-group">
                                                                            <span style="font-size:15.5px; line-height:1.5;" id="error200">
                                                                                1.<strong>Memory </strong> <br> Recent and immediate memory (Inquired) I am going to ask you to remember five words (color, object, animal – e.g., blue, table, horse, bottle, wisdom) and I will ask you to repeat them to me in 5 minutes and after 20 minutes. Please repeat them now after me: blue, table, horse, bottle, wisdom.” – After 5 & 20 minutes elapse – “What were those three words I asked you to remember?” <span class="text-danger"> * </span>
                                                                            </span>
                                                                        </tr>
                                                                        <tr>
                                                                            <div style="width:100%; padding-bottom:6px;">
                                                                                <textarea disabled class="form-control " name="mini-mse-q1" id="mini-mse-q1" cols="60" rows="2" placeholder="Enter your answer"></textarea>
                                                                            </div>
                                                                        </tr>

                                                                        <hr>

                                                                        <tr class="form-group">
                                                                            <span style="font-size:15.5px; line-height:1.5;" id="error201">
                                                                            2.<strong>Attention </strong> <br> I will recite a series of numbers to you, and then I will ask you to repeat them to me, first forwards and then backwards.” [Begin with 3 numbers - not consecutive numbers, and advance to 7-8 numbered sequence]. <br>
                                                                                Spelling Backwards - Suggested  instructions:<br>
                                                                                <strong>“Spell the word 'world'. Now spell the word 'world' backwards.”</strong><span class="text-danger"> * </span>
                                                                            </span>
                                                                        </tr>
                                                                        <tr>
                                                                            <div style="width:100%; padding-bottom:6px;">
                                                                            <textarea disabled class="form-control " name="mini-mse-q2" id="mini-mse-q2" cols="60" rows="2" placeholder="Enter your answer"></textarea>
                                                                            </div>
                                                                        </tr>
                                                                        
                                                                        <hr>

                                                                        <tr class="form-group">
                                                                            <span style="font-size:15.5px; line-height:1.5;" id="error202">
                                                                            3.<strong>Appearance </strong>- (Observed) -<br> Possible descriptors: Gait, posture, clothes, grooming.<span class="text-danger"> * </span>
                                                                            </span>                              
                                                                        </tr>
                                                                        <tr>
                                                                        <div style="width:100%; padding-bottom:6px;">
                                                                            <textarea disabled class="form-control " name="mini-mse-q3" id="mini-mse-q3" cols="60" rows="2" placeholder="Enter your answer"></textarea>
                                                                        </div>
                                                                        </tr>
                                                                        
                                                                        <hr>

                                                                        <tr class="form-group">
                                                                            <span style="font-size:15.5px; line-height:1.5;" id="error203">
                                                                            4.<strong>Attitude </strong> -(Observed) -<br> Possible descriptors: • Cooperative, hostile, open, secretive, evasive, suspicious, apathetic, easily distracted, focused, defensive.<span class="text-danger"> * </span>
                                                                            </span>
                                                                        </tr>
                                                                        <tr>
                                                                        <div style="width:100%; padding-bottom:6px;">
                                                                            <textarea disabled class="form-control " name="mini-mse-q4" id="mini-mse-q4" cols="60" rows="2" placeholder="Enter your answer"></textarea>
                                                                        </div>
                                                                        </tr>
                                                                        
                                                                        <hr>

                                                                        <tr class="form-group">
                                                                            <span style="font-size:15.5px; line-height:1.5;" id="error204">
                                                                            5.<strong>Level of Consciousness </strong> -(Observed) <br> Possible descriptors: • Vigilant, alert, drowsy, lethargic, stupors, asleep, comatose, confused, fluctuating.<span class="text-danger"> * </span>
                                                                            </span>
                                                                        </tr>
                                                                        <tr>
                                                                            <div style="width:100%; padding-bottom:6px;">
                                                                                <textarea disabled class="form-control " name="mini-mse-q5" id="mini-mse-q5" cols="60" rows="2" placeholder="Enter your answer"></textarea>
                                                                            </div>
                                                                        </tr>

                                                                        <hr>

                                                                        <tr class="form-group">
                                                                            <span style="font-size:15.5px; line-height:1.5;" id="error205">
                                                                            6.<strong>Mood </strong>(Inquired):<br>A sustained state of inner feeling – Possible questions for patient:<br>
                                                                                        • “How are your spirits?” <br>
                                                                                        • “How are you feeling?” <br>
                                                                                        • “Have you been discouraged/depressed/low/blue lately?” <br>
                                                                                        • “Have you been energized/elated/high/out of control lately?”<br> 
                                                                                        • “Have you been angry/irritable/edgy lately?”
                                                                                        <span class="text-danger"> * </span>
                                                                            </span>
                                                                        </tr>
                                                                        <tr>
                                                                            <div style="width:100%; padding-bottom:6px;">
                                                                            <textarea disabled class="form-control " name="mini-mse-q6" id="mini-mse-q6" cols="60" rows="2" placeholder="Enter your answer"></textarea>
                                                                            </div>
                                                                        </tr>

                                                                        <hr>

                                                                        <tr class="form-group">
                                                                            <span style="font-size:15.5px; line-height:1.5;" id="error206">
                                                                            7.<strong>Thought content </strong>-(Inquired/Observed)-<br>Possible questions for patient: “What do you think about when you are sad/angry?”<br>
                                                                                • “What's been on your mind lately?”
                                                                                • “Do you find yourself ruminating about things?”<br>
                                                                                • “Are there thoughts or images that you have a really difficult time getting out of your head?”<br>
                                                                                • “Are you worried/scared/frightened about something or other?”<br>
                                                                                • “Do you have personal beliefs that are not shared by others?” (Delusions are fixed, false, unshared beliefs.)<br>
                                                                                • “Do you ever feel detached/removed/changed/different from others around you?”
                                                                                <span class="text-danger"> * </span>
                                                                            </span>
                                                                        </tr>
                                                                        <tr>
                                                                            <div style="width:100%; padding-bottom:6px;">
                                                                                <textarea disabled class="form-control " name="mini-mse-q7" id="mini-mse-q7" cols="60" rows="2" placeholder="Enter your answer"></textarea>
                                                                            </div>
                                                                        </tr>

                                                                        <hr>

                                                                        <tr class="form-group">
                                                                            <span style="font-size:15.5px; line-height:1.5;" id="error207">
                                                                            8.<strong>Do you get quality sleep at night?  </strong> <br> How would rate your quality of sleep on a scale of 1-10? 1 being poor sleep and 10 being very good & sound sleep.<span class="text-danger"> * </span>
                                                                            </span>                                                                                     
                                                                        </tr>
                                                                        <tr class="form-group">
                                                                            <div class="text-center">
                                                                                <label style="padding-right: 10px;">Poor Sleep</label>
                                                                                <label class="radio-label-vertical">
                                                                                <input type="radio" name="radio" value="0" disabled >0</label>
                                                                                <label class="radio-label-vertical">
                                                                                    <input type="radio" name="radio" value="1" disabled >1</label>
                                                                                <label class="radio-label-vertical">
                                                                                    <input type="radio" name="radio" value="2" disabled >2</label>
                                                                                <label class="radio-label-vertical">
                                                                                    <input type="radio" name="radio" value="3" disabled >3</label>
                                                                                <label class="radio-label-vertical">
                                                                                    <input type="radio" name="radio" value="4" disabled >4</label>
                                                                                <label class="radio-label-vertical">
                                                                                    <input type="radio" name="radio" value="5" disabled >5</label>
                                                                                <label class="radio-label-vertical">
                                                                                    <input type="radio" name="radio" value="6" disabled >6</label>
                                                                                <label class="radio-label-vertical">
                                                                                    <input type="radio" name="radio" value="7" disabled >7</label>
                                                                                <label class="radio-label-vertical">
                                                                                    <input type="radio" name="radio" value="8" disabled >8</label>
                                                                                <label class="radio-label-vertical">
                                                                                    <input type="radio" name="radio" value="9" disabled >9</label>
                                                                                <label class="radio-label-vertical">
                                                                                    <input type="radio" name="radio" value="10" disabled >10</label>
                                                                                <label style="padding-left: 10px;">Very good & Sound Sleep</label>
                                                                            </div>
                                                                            <br>
                                                                        </tr>

                                                                        <hr>

                                                                        <tr class="form-group">
                                                                            <span style="font-size:15.5px; line-height:1.5;" id="error208">
                                                                            9.<strong> Medical History </strong> <br>(Surgery, chronic health conditions, medical problems, hereditary condition or history)<span class="text-danger"> * </span>
                                                                            </span>
                                                                        </tr>
                                                                        <tr>
                                                                            <div style="width:100%; padding-bottom:6px;">
                                                                            <textarea disabled class="form-control " name="mini-mse-q9" id="mini-mse-q9" cols="60" rows="2" placeholder="Enter your answer"></textarea>
                                                                            </div>
                                                                        </tr>
                                                                        
                                                                        <hr>

                                                                        <tr class="form-group">
                                                                            <span style="font-size:15.5px; line-height:1.5;" id="error209">
                                                                            10.<strong> Significant Positive Life Experiences </strong><span class="text-danger"> * </span>
                                                                            </span>
                                                                        </tr>
                                                                        <tr>
                                                                            <div style="width:100%; padding-bottom:6px;">
                                                                            <textarea disabled class="form-control " name="mini-mse-q10" id="mini-mse-q10" cols="60" rows="2" placeholder="Enter your answer"></textarea>
                                                                            </div>
                                                                        </tr>

                                                                        <hr>

                                                                        <tr class="form-group">
                                                                            <span style="font-size:15.5px; line-height:1.5;" id="error210">
                                                                            11.<strong> Significant Negative Life Experiences </strong><span class="text-danger"> * </span>
                                                                            </span>
                                                                        </tr>
                                                                        <tr>
                                                                            <div style="width:100%; padding-bottom:6px;">
                                                                            <textarea disabled class="form-control " name="mini-mse-q11" id="mini-mse-q11" cols="60" rows="2" placeholder="Enter your answer"></textarea>
                                                                            </div>
                                                                        </tr>

                                                                        <hr>

                                                                        <tr class="form-group">
                                                                            <span style="font-size:15.5px; line-height:1.5;" id="error211">
                                                                                12.<strong> Any Other Observation </strong><span class="text-danger"> * </span>
                                                                            </span>
                                                                        </tr>
                                                                        <tr>
                                                                            <div style="width:100%; padding-bottom:6px;">
                                                                            <textarea disabled class="form-control " name="mini-mse-q12" id="mini-mse-q12" cols="60" rows="2" placeholder="Enter your answer"></textarea>
                                                                            </div>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div align="center">
                                                            <div class="alert alert-success" role="alert" style="height:40px;width:500px; display: none;" id="GGSC_succ">Assessment Submitted!</div>
                                                        </div>
                                                        <div align="center" style="margin-right: 20px; display:none;">
                                                            <input type="submit" name="submit_btn" id="submit_btn" class="submit-btn" style="background-color:#8ebe3f; border-radius:10px; height:40px; padding: 0; width:150px;" value="Submit">
                                                            <div class="error" style="color:red;font-weight:bolder">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                </div>
                            </div>
                        </div>
                        <!-- mini-mse end -->

                                    <!-- mse start -->
                        <div class="page-container" id="mse-scoring"  style="display: none;" >
                            <div class="page-content">
                                <div class="container">
                                    <form class="CG-form" id="mse_questions_form">
                                        <div class="row row-xs">
                                        <div class="col-md-1"></div>
                                            <div class="col-md-10">
                                                <h2 class="text-center mb-4" style="color:#8ebe3f;">Mental State Examination - Result</h2>
                                            </div>
                                        </div>
                                        <div class="row row-xs border border-dark py-4">
                                            <div class="col w-100 py-4">
                                                <div class="portlet light">
                                                    <div class="portlet-body">
                                                        <table style="max-width:100%" class="table">
                                                            <tr>
                                                                <td width="35%" style="vertical-align:middle">
                                                                    <span id="error200">
                                                                        <strong>1.</strong> Appearance: <span class="text-danger"> * </span>
                                                                    </span>
                                                                    <BR />
                                                                </td>
                                                                <td class="segmented-button" style="vertical-align:middle">
                                                                    <div class="form-group segmented-button options">
                                                                        <select disabled class="form-control" name="q100" id="op1000">
                                                                            <option value="-1" disabled selected=""> -- Select -- </option>
                                                                            <option value="1">appropriate </option>
                                                                            <option value="2">well groomed</option>
                                                                            <option value="3">bizarre </option>
                                                                            <option value="4">disheveled </option>
                                                                            <option value="OTH">other (describe) </option>
                                                                        </select>
                                                                        <textarea disabled class="form-control hide" name="q100" id="op1001" cols="60" rows="2"></textarea>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="vertical-align:middle">
                                                                    <span id="error201">
                                                                        <strong>2.</strong> Consciousness <span class="text-danger"> * </span>
                                                                    </span>
                                                                    <BR />
                                                                </td>
                                                                <td style="vertical-align:middle">
                                                                    <div class="form-group segmented-button options">
                                                                        <select disabled class="form-control" name="q101" id="op1002">
                                                                            <option value="-1" disabled selected=""> -- Select -- </option>
                                                                            <option value="1"> alert</option>
                                                                            <option value="2"> drowsy </option>
                                                                            <option value="3">vegetative </option>
                                                                            <option value="OTH"> other (describe) </option>

                                                                        </select>
                                                                    <textarea disabled  class="form-control hide" name="q101" id="op1003" cols="60" rows="2"></textarea>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                            <tr>
                                                <td>
                                                    <br>
                                                    <strong>3.</strong> Orientation <font color="RED"> * </font>
                                                    <br> <br> 
                                                    <ul style="list-style: none;">
                                                        <li>
                                                            <span id="error202">
                                                            <strong>&emsp;3</strong>A. To Person <font color="RED"> * </font>
                                                            </span>
                                                            <td class="segmented-button"  style="padding-top: 55px;">
                                                                <div class="form-group segmented-button">
                                                                    <input id="op3001" name="q300" type="radio" value="1">
                                                                    <label for="op3001">Yes</label>
                                                                    <input id="op3002" name="q300" type="radio" value="0">
                                                                    <label for="op3002">No</label>
                                                                </div>
                                                            </td>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <br>
                                                    <ul style="list-style: none;">
                                                        <li>
                                                            <span id="error212"style="vertical-align:middle; padding-top:15px;">
                                                            <strong>&emsp;3</strong>B. To Place <font color="RED"> * </font>
                                                            </span>
                                                            <td class="segmented-button" style="padding-top: 24px;">
                                                                <div class="form-group segmented-button">
                                                                    <input id="op3003" name="q301" type="radio" value="1">
                                                                    <label for="op3003">Yes</label>
                                                                    <input id="op3004" name="q301" type="radio" value="0">
                                                                    <label for="op3004">No</label>
                                                                </div>
                                                            </td>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <br>
                                                    <ul style="list-style: none;">
                                                        <li>
                                                            <span id="error214" style="vertical-align:middle; padding-top:12px;">
                                                            <strong>&emsp;3</strong>C. To Time <font color="RED"> * </font>
                                                            </span>
                                                            <td class="segmented-button"  style="padding-top: 22px;">
                                                                <div class="form-group segmented-button">
                                                                    <input id="op3005" name="q302" type="radio" value="1">
                                                                    <label for="op3005">Yes</label>
                                                                    <input id="op3006" name="q302" type="radio" value="0">
                                                                    <label for="op3006">No</label>
                                                                </div>
                                                            </td>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>                 
                                        </tr>
                                        
                                        <tr>
                                                                <td style="vertical-align:middle">
                                                                    <span id="error203">
                                                                        <strong>4.</strong> Speech <span class="text-danger"> * </span>
                                                                    </span>
                                                                    <BR />
                                                                </td>
                                                                <td style="vertical-align:middle">
                                                                    <div class="form-group segmented-button options">
                                                                        <select disabled class="form-control" name="q103" id="op1007">
                                                                            <option value="-1" disabled selected=""> -- Select -- </option>
                                                                            <option value="1"> appropriate </option>
                                                                            <option value="2">spontaneous </option>
                                                                            <option value="3">rapid </option>
                                                                            <option value="4">pressured </option>
                                                                            <option value="5">slow </option>
                                                                            <option value="6">slurred </option>
                                                                            <option value="OTH">other (describe) </option>
                                                                        </select>
                                                                    <textarea disabled  class="form-control hide" name="q103" id="op1008" cols="60" rows="2"></textarea>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="vertical-align:middle">
                                                                    <span id="error204">
                                                                        <strong>5.</strong> Affect <span class="text-danger"> * </span>
                                                                    </span>
                                                                    <br />
                                                                </td>
                                                                <td class="segmented-button" style="vertical-align:middle">
                                                                    <div class="form-group segmented-button options">
                                                                        <select disabled class="form-control" name="q104" id="op1009">
                                                                            <option value="-1" disabled selected=""> -- Select -- </option>
                                                                            <option value="1"> sad </option>
                                                                            <option value="2"> tearful </option>
                                                                            <option value="3"> flat </option>
                                                                            <option value="4">anxious </option>
                                                                            <option value="5"> angry </option>
                                                                            <option value="6"> concerned </option>
                                                                            <option value="7"> agitated </option>
                                                                            <option value="8"> elated </option>
                                                                            <option value="9"> calm </option>
                                                                            <option value="10">inappropriate </option>
                                                                            <option value="11"> broad </option>
                                                                            <option value="12"> restricted</option>
                                                                            <option value="13"> blunted </option>
                                                                            <option value="OTH">other (describe) </option>
                                                                        </select>
                                                                    <textarea disabled  class="form-control hide" name="q104" id="op1010" cols="60" rows="2"></textarea>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="vertical-align:middle">
                                                                    <span id="error205">
                                                                        <strong>6.</strong> Mood <span class="text-danger"> * </span>
                                                                    </span>
                                                                    <BR />
                                                                </td>
                                                                <td class="segmented-button" style="vertical-align:middle">
                                                                    <div class="form-group segmented-button options">
                                                                        <select disabled class="form-control" name="q105" id="op1011">
                                                                            <option value="-1" disabled selected=""> -- Select -- </option>
                                                                            <option value="1"> euthymic </option>
                                                                            <option value="2"> dysphoric </option>
                                                                            <option value="3"> elevated </option>
                                                                            <option value="4"> euphoric </option>
                                                                            <option value="5"> expansive </option>
                                                                            <option value="6"> irritable </option>
                                                                            <option value="7"> depressed </option>
                                                                            <option value="OTH"> other (describe) </option>
                                                                        </select>
                                                                    <textarea disabled  class="form-control hide" name="q105" id="op1012" cols="60" rows="2"></textarea>


                                                                    </div>
                                                                </td>
                                                            </tr>



                                                            <tr>
                                                                <td style="vertical-align:middle">
                                                                    <span id="error206">
                                                                        <strong>7.</strong> Concentration <span class="text-danger"> * </span>
                                                                    </span>
                                                                    <BR />
                                                                </td>
                                                                <td  class="py-3">
                                                                    <div class="form-check form-check-inline">
                                                                    <input disabled id="op1013" name="q106" type="radio" value="1">
                                                                    <label for="op1013">&nbsp; Good</label>
                                                                    </div>
                                                                    
                                                                    <div class="form-check form-check-inline">
                                                                    <input disabled id="op1014" name="q106" type="radio" value="2" >
                                                                    <label for="op1014">&nbsp; Fair</label>
                                                                    </div>
                                                                    
                                                                    <div class="form-check form-check-inline">
                                                                    <input disabled id="op1015" name="q106" type="radio" value="3" >
                                                                    <label for="op1015">&nbsp; Poor</label>
                                                                    </div>
                                                                    
                                                                    <div class="form-check form-check-inline">
                                                                    <input disabled id="op1016" name="q106" type="radio" value="4" >
                                                                    <label for="op1016">&nbsp; Distracted</label>
                                                                    </div>
                                                                    

                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td style="vertical-align:middle">
                                                                    <span id="error207">
                                                                        <strong>8.</strong> Activity Level <span class="text-danger"> * </span>
                                                                    </span>
                                                                    <BR />
                                                                </td>
                                                                <td class="segmented-button">
                                                                    <div class="form-group segmented-button options">


                                                                        <select disabled class="form-control" name="q107" id="op1017">
                                                                            <option value="-1" disabled selected=""> -- Select -- </option>
                                                                            <option value="1"> appropriate </option>
                                                                            <option value="2"> agitated </option>
                                                                            <option value="3"> psychomotor retardation</option>
                                                                            <option value="4"> tremulous </option>
                                                                            <option value="5"> restless</option>
                                                                            <option value="OTH"> other (describe) </option>

                                                                        </select>
                                                                    <textarea disabled  class="form-control hide" name="q107" id="op1018" cols="60" rows="2"></textarea>

                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="vertical-align:middle">
                                                                    <span id="error208">
                                                                        <strong>9.</strong> Thoughts <span class="text-danger"> * </span>
                                                                    </span>
                                                                    <BR />
                                                                </td>
                                                                <td class="segmented-button" style="vertical-align:middle">
                                                                    <div class="form-group segmented-button options">

                                                                        <select disabled class="form-control" name="q108" id="op1019">
                                                                            <option value="-1" disabled selected=""> -- Select -- </option>
                                                                            <option value="1">appropriate </option>
                                                                            <option value="2"> logical </option>
                                                                            <option value="3">coherent </option>
                                                                            <option value="4"> blocked </option>
                                                                            <option value="5"> loose association</option>
                                                                            <option value="6"> hallucinations </option>
                                                                            <option value="7"> delusions</option>
                                                                            <option value="8"> circumstantial</option>
                                                                            <option value="9"> tangential </option>
                                                                            <option value="OTH"> other (describe) </option>
                                                                        </select>
                                                                    <textarea disabled  class="form-control hide" name="q108" id="op1020" cols="60" rows="2"></textarea>


                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="vertical-align:middle">
                                                                    <span id="error209">
                                                                        <strong>10.</strong> Memory <span class="text-danger"> * </span>
                                                                    </span>
                                                                    <BR />
                                                                </td>
                                                                <td class="py-3">
                                                                    <div class="form-check form-check-inline">
                                                                        <input disabled id="op1021" name="q109" type="radio" value="1">
                                                                    <label for="op1021">&nbsp; Intact</label>
                                                                    </div>
                                                                    
                                                                    <div class="form-check form-check-inline">
                                                                    <input disabled id="op1022" name="q109" type="radio" value="2" >
                                                                    <label for="op1022">&nbsp; Short Term Deficits</label>
                                                                    </div>
                                                                    
                                                                    <div class="form-check form-check-inline">
                                                                    <input disabled id="op1023" name="q109" type="radio" value="3" >
                                                                    <label for="op1023">&nbsp; Long Term Deficits</label>
                                                                    </div>
                                                                    

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="vertical-align:middle">
                                                                    <span id="error210">
                                                                        <strong>11.</strong> Judgment <span class="text-danger"> * </span>
                                                                    </span>
                                                                    <BR />
                                                                </td>
                                                                <td class="py-3">
                                                                    <div class="form-check form-check-inline">
                                                                        <input disabled id="op1024" name="q110" type="radio" value="1">
                                                                        <label for="op1024">&nbsp; Good</label>
                                                                    </div>
                                                                    
                                                                    <div class="form-check form-check-inline">
                                                                        <input disabled id="op1025" name="q110" type="radio" value="2" >
                                                                        <label for="op1025">&nbsp; Fair</label>
                                                                    </div>

                                                                </td>
                                                            </tr>


                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div align="center">
                                                <div class="alert alert-success" role="alert" style="height:40px;width:500px; display: none;" id="GGSC_succ">Assessment Submitted!</div>
                                            </div>
                                            <div align="center" style="margin-right: 20px; display:none;">
                                                <input type="submit" name="submit_btn" id="submit_btn" class="submit-btn" style="background-color:#8ebe3f; border-radius:10px; height:40px; padding: 0; width:150px;" value="Submit">
                                                <div class="error" style="color:red;font-weight:bolder">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- mse end -->

                        <!-- brcs start -->
                        <div class="page-container" id="brcs-scoring" style="display: none;">
                            <div class="page-content">
                                <div class="container">
                                    <div class="row row-xs">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10" >
                                        <h2 class="text-center mb-4" style="color:#8ebe3f;">BRIEF RESILIENCE COPING SCALE</h2>
                                        </div>
                                    </div>
                                <div class="border border-dark">
                                    <div class="row row-xs">
                                        <div class="col w-100 py-4">
                                        <form class="CG-form" id="pss_assessment" method="POST">
                                        <div class="col w-100">
                                        <div class="portlet light">
                                            <!-- Questions -->
                                                <div class="portlet-body">
                                                    <table style="max-width:100%"  class="table ">
                                                        <tr>
                                                            <td width="50%" >
                                                            <span id="error1"
                                                                >1. I look for creative ways to alter difficult situations.
                                                                <span class="text-danger"> * </span>
                                                            </span>
                                                            <br/>
                                                            </td>
                                                            <td>
                                                                <div class="col form-check form-check-inline" style="width:250px">
                                                                    <input disabled class="form-check-input" type="radio" name="q1" id="q1_radio1" value="1">
                                                                    <label class="form-check-label" for="q1_radio1">Does not describe me at all</label>
                                                                </div>
                                                                <div class="col form-check form-check-inline" style="width:250px">
                                                                    <input disabled class="form-check-input" type="radio" name="q1" id="q1_radio2" value="2">
                                                                    <label class="form-check-label" for="q1_radio2">Does not describe me</label>
                                                                </div>
                                                            
                                                            
                                                                <div class="col form-check form-check-inline" style="width:250px">
                                                                    <input disabled class="form-check-input" type="radio" name="q1" id="q1_radio3" value="3">
                                                                    <label class="form-check-label" for="q1_radio3">Neutral</label>
                                                                </div>
                                                                <div class="col form-check form-check-inline" style="width:250px">
                                                                    <input disabled class="form-check-input" type="radio" name="q1" id="q1_radio4" value="4">
                                                                    <label class="form-check-label" for="q1_radio4">Describes Me</label>
                                                                </div>
                                                            
                                                                <div class="col form-check form-check-inline" style="width:250px">
                                                                    <input disabled class="form-check-input" type="radio" name="q1" id="q1_radio5" value="5">
                                                                    <label class="form-check-label" for="q1_radio5">Describes Me very well</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="50%" >
                                                                <span id="error2">2. Regardless of what happens to me, I believe I can control my reaction to it. 
                                                                    <span class="text-danger"> * </span>
                                                                </span>
                                                            </td>
                                                            <td> 
                                                                <div class="col form-check form-check-inline" style="width:250px">
                                                                    <input disabled class="form-check-input" type="radio" name="q2" id="q2_radio1" value="1">
                                                                    <label class="form-check-label" for="q2_radio1">Does not describe me at all</label>
                                                                </div>
                                                                <div class="col form-check form-check-inline" style="width:250px">
                                                                    <input disabled class="form-check-input" type="radio" name="q2" id="q2_radio2" value="2">
                                                                    <label class="form-check-label" for="q2_radio2">Does not describe me</label>
                                                                </div>
                                                                <div class="col form-check form-check-inline" style="width:250px">
                                                                    <input disabled class="form-check-input" type="radio" name="q2" id="q2_radio3" value="3">
                                                                    <label class="form-check-label" for="q2_radio3">Neutral</label>
                                                                </div>
                                                                <div class="col form-check form-check-inline" style="width:250px">
                                                                    <input disabled class="form-check-input" type="radio" name="q2" id="q2_radio4" value="4">
                                                                    <label class="form-check-label" for="q2_radio4">Describes Me</label>
                                                                </div>
                                                                <div class="col form-check form-check-inline" style="width:250px">
                                                                    <input disabled class="form-check-input" type="radio" name="q2" id="q2_radio5" value="5">
                                                                    <label class="form-check-label" for="q2_radio5">Describes Me very well</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="50%" >
                                                                <span id="error3">3. I believe I can grow in positive ways by dealing with difficult situations.
                                                                    <span class="text-danger"> * </span>
                                                                </span>
                                                            </td>
                                                            <td> 
                                                                <div class="col form-check form-check-inline" style="width:250px">
                                                                    <input disabled class="form-check-input" type="radio" name="q3" id="q3_radio1" value="1">
                                                                    <label class="form-check-label" for="q3_radio1">Does not describe me at all</label>
                                                                </div>
                                                                <div class="col form-check form-check-inline" style="width:250px">
                                                                    <input disabled class="form-check-input" type="radio" name="q3" id="q3_radio2" value="2">
                                                                    <label class="form-check-label" for="q3_radio2">Does not describe me</label>
                                                                </div>
                                                                <div class="col form-check form-check-inline" style="width:250px">
                                                                    <input disabled class="form-check-input" type="radio" name="q3" id="q3_radio3" value="3">
                                                                    <label class="form-check-label" for="q3_radio3">Neutral</label>
                                                                </div>
                                                                <div class="col form-check form-check-inline" style="width:250px">
                                                                    <input disabled class="form-check-input" type="radio" name="q3" id="q3_radio4" value="4">
                                                                    <label class="form-check-label" for="q3_radio4">Describes Me</label>
                                                                </div>
                                                                <div class="col form-check form-check-inline" style="width:250px">
                                                                    <input disabled class="form-check-input" type="radio" name="q3" id="q3_radio5" value="5">
                                                                    <label class="form-check-label" for="q3_radio5">Describes Me very well</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="50%" >
                                                            <span id="error4">4. I actively look for ways to replace the losses I encounter in life.
                                                                <span class="text-danger"> * </span>
                                                            </span>
                                                            </td>
                                                            <td> 
                                                                <div class="col form-check form-check-inline" style="width:250px">
                                                                    <input disabled class="form-check-input" type="radio" name="q4" id="q4_radio1" value="1">
                                                                    <label class="form-check-label" for="q4_radio1">Does not describe me at all</label>
                                                                </div>
                                                                <div class="col form-check form-check-inline" style="width:250px">
                                                                    <input disabled class="form-check-input" type="radio" name="q4" id="q4_radio2" value="2">
                                                                    <label class="form-check-label" for="q4_radio2">Does not describe me</label>
                                                                </div>
                                                                <div class="col form-check form-check-inline" style="width:250px">
                                                                    <input disabled class="form-check-input" type="radio" name="q4" id="q4_radio3" value="3">
                                                                    <label class="form-check-label" for="q4_radio3">Neutral</label>
                                                                </div>
                                                                <div class="col form-check form-check-inline" style="width:250px">
                                                                    <input disabled class="form-check-input" type="radio" name="q4" id="q4_radio4" value="4">
                                                                    <label class="form-check-label" for="q4_radio4">Describes Me</label>
                                                                </div>
                                                                <div class="col form-check form-check-inline" style="width:250px">
                                                                    <input disabled class="form-check-input" type="radio" name="q4" id="q4_radio5" value="5">
                                                                    <label class="form-check-label" for="q4_radio5">Describes Me very well</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div align="center">
                                                <div class="alert alert-success" role="alert" style="height:40px;width:500px; display: none;" id="GGSC_succ">Assessment Submitted!</div>
                                            </div>
                                            <div align="center" style="margin-right: 20px; display:none;">
                                                <input type="submit" name="submit_btn" id="submit_btn"  class="submit-btn" style="background-color:#8ebe3f; border-radius:10px; height:40px; padding: 0; width:150px;"  value="Submit" >
                                                <div class="error" style="color:red;font-weight:bolder">
                                                </div>
                                            </div>                      
                                        </div>
                                </form>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    <!-- brcs end -->
                        <!-- Nla start -->
                        <div class="page-container" id="nla-result"  style="display: none;" >
                            <div class="page-content">
                                <div class="container">
                                    <form class="CG-form" id="mse_questions_form">
                                        <div class="row row-xs">
                                        <div class="col-md-1"></div>
                                            <div class="col-md-10">
                                                <h2 class="text-center mb-4" style="color:#8ebe3f;">Nutrition Lifestyle Assessment/Diet Recall  - Result</h2>
                                            </div>
                                        </div>
                                        <div class="row row-xs border border-dark py-4">
                                            <div class="col w-100 py-4">
                                                <div class="portlet light">
                                                    <div class="portlet-body">
                                                        <table style="max-width:100%" class="table">
                                                            <tr>
                                                                <td width="50%" style="border-top: 0px; padding-top:20px; padding-bottom:25px">
                                                                    <span id="error200">
                                                                        <strong>1. </strong>Food preference<font color="RED"> * </font>
                                                                    </span>
                                                                    <br>
                                                                </td>
                                                                <td class="segmented-button" style="border-top: 0px;">
                                                                    <div class="form-group segmented-button options">
                                                                        <select disabled class="form-control" name="q101" id="op4000">
                                                                            <option value="-1" disabled selected=""> -- Select -- </option>
                                                                            <option value="1">Veg</option>
                                                                            <option value="2">Nonveg</option>
                                                                            <option value="3">Jain</option>
                                                                            <option value="4">Eggetarian</option>
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <!-- test -->
                                                                
                                                            
                                                                <td style="vertical-align:middle;">
                                                                    <span id="error201">
                                                                        <strong>2.</strong> Frequency of Outside Food <font color="RED"> * </font>
                                                                    </span>
                                                                    <BR />
                                                                </td>
                                                                <td class="segmented-button" style="border-top: 0px;">
                                                                    <div class="form-group segmented-button options">
                    
                                                                        <select disabled class="form-control" name="q102" id="op4001">
                                                                            <option value="-1" disabled selected=""> -- Select -- </option>
                                                                            <option value="1">Once a week</option>
                                                                            <option value="2">Twice a week</option>
                                                                            <option value="3">More than twice a week</option>
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="vertical-align:middle">
                                                                    <span id="error202">
                                                                        <strong>3.</strong> Exercise <font color="RED"> * </font>
                                                                    </span>
                                                                    <BR />
                                                                </td>
                                                                <td style="vertical-align:middle; padding-bottom:10px">
                                                                    <div class="form-group segmented-button options">
                                                                        <select disabled class="form-control" name="q103" id="op4002">
                                                                            <option value="-1" disabled selected=""> -- Select -- </option>
                                                                            <option value="1">Regular </option>
                                                                            <option value="2">Occasional </option>
                                                                            <option value="3">Weekly once or twice </option>
                                                                            <option value="4">Never </option>
                                                                            <option value="5">Used to do earlier </option>
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="vertical-align:middle">
                                                                    <span id="error203">
                                                                        <strong>4.</strong> Type of exercise  <font color="RED"> * </font>
                                                                    </span>
                                                                    <BR />
                                                                </td>
                                                                <td class="segmented-button" style="vertical-align:middle; padding-bottom:10px">
                                                                    <div class="form-group segmented-button options">
                    
                    
                                                                        <select disabled class="form-control" name="q104" id="op4003">
                                                                            <option value="-1" disabled selected=""> -- Select -- </option>
                                                                            <option value="1"> Brisk/walk </option>
                                                                            <option value="2"> Running/ jogging </option>
                                                                            <option value="3"> Gym/ Zumba </option>
                                                                            <option value="4"> Any sport </option>
                                                                            <option value="5"> Yoga/ Meditation </option>
                                                                            <option value="OTH">Others </option>
                                                                        </select>
                                                                        <input disabled type="text" class="form-control" id="op4004" name="q404">
                    
                    
                                                                    </div>
                                                                </td>
                                                            </tr>
                    
                                                            <tr>
                                                                <td style="vertical-align:middle">
                                                                    <span id="error204">
                                                                        <strong>5.</strong> Following any Diet Plan <font color="RED"> * </font>
                                                                    </span>
                                                                    <BR />
                                                                </td>
                                                                <td class="segmented-button"  style="padding-top: 22px;">
                                                                                    <div class="form-group segmented-button">
                                                                                        <input id="op4005" name="q1005" type="radio" value="1" >
                                                                                        <label for="op1006">Yes</label>
                                                                                        <input id="op4006" name="q105" type="radio" value="0" >
                                                                                        <label for="op1007">No</label>
                                                                                    </div>
                                                                        <!-- !TODO  -->
                                                                                    <textarea  class="form-control hide" name="q105" id="op4007" cols="60" rows="2" placeholder="Please Specify..."></textarea  class="form-control">
                                                                                </td>    
                                                            </tr>
                    
                    
                                                            <tr>
                                                                <td style="vertical-align:middle">
                                                                    <span id="error205">
                                                                        <strong>6.</strong> Intake of Alcohol  <font color="RED"> * </font>
                                                                    </span>
                                                                    <BR />
                                                                </td>
                                                                <td class="segmented-button" style="vertical-align:middle; padding-bottom:10px">
                                                                    <div class="form-group segmented-button options">
                    
                    
                                                                        <select disabled class="form-control" name="q106" id="op4008">
                                                                            <option value="-1" disabled selected=""> -- Select -- </option>
                                                                            <option value="1"> Weekly </option>
                                                                            <option value="2"> Monthly </option>
                                                                            <option value="3"> Quartely/ Occasionally </option>
                                                                            <option value="4"> Never </option>
                                                                        </select>
                    
                    
                                                                    </div>
                                                                </td>
                                                            </tr>
                    
                                                            <tr>
                                                                <td style="vertical-align:middle;">
                                                                    <span id="error206">
                                                                        <strong>7.</strong> Type of Alcohol <font color="RED"> * </font>
                                                                    </span>
                                                                    <BR />
                                                                </td>
                                                                <td style="vertical-align:middle; padding-bottom:10px;">
                                                                    <div disabled class="form-controlgroup">
                                                                        <input disabled type="text" class="form-control" id="op4009" name="q107">
                                                                    </div>
                                                                </td>
                                                            </tr>
                    
                                                            <tr>
                                                                <td style="vertical-align:middle">
                                                                    <span id="error207">
                                                                        <strong>8.</strong> Smoking Habit <font color="RED"> * </font>
                                                                    </span>
                                                                    <BR />
                                                                </td>
                                                                <td class="segmented-button">
                                                                    <div class="form-group segmented-button options" style="vertical-align:middle; padding-bottom:10px">
                    
                    
                                                                        <select disabled class="form-control" name="q108" id="op4011">
                                                                            <option value="-1" disabled selected=""> -- Select -- </option>
                                                                            <option value="1"> Often </option>
                                                                            <option value="2"> Occasionally </option>
                                                                            <option value="3"> Chain Smoker </option>
                                                                            <option value="4"> Never </option>
                    
                                                                        </select>
                    
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="vertical-align:middle">
                                                                    <span id="error208">
                                                                        <strong>9.</strong> Fluid intake per day <font color="RED"> * </font>
                                                                    </span>
                                                                    <BR />
                                                                </td>
                                                                <td class="segmented-button" style="vertical-align:middle; padding-bottom:10px">
                                                                    <div class="form-group segmented-button options">
                    
                                                                        <select disabled class="form-control" name="q109" id="op4012">
                                                                            <option value="-1" disabled selected=""> -- Select -- </option>
                                                                            <option value="1"> Less than 1 litre per day </option>
                                                                            <option value="2"> 1-2 litre per day </option>
                                                                            <option value="3"> 2-3 litre per day </option>
                                                                            <option value="4"> More than 4 litre per day </option>
                                                                        </select>
                    
                    
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="vertical-align:middle">
                                                                    <span id="error209">
                                                                        <strong>10.</strong> Sleep Cycle <font color="RED"> * </font>
                                                                    </span>
                                                                    <BR />
                                                                </td>
                                                                <td class="segmented-button" style="vertical-align:middle; padding-bottom:10px">
                                                                    <div class="form-group segmented-button options">
                    
                                                                        <select disabled class="form-control" name="q110" id="op4013">
                                                                            <option value="-1" disabled selected=""> -- Select -- </option>
                                                                            <option value="1"> 9 hours and more </option>
                                                                            <option value="2"> 6-7 hrs </option>
                                                                            <option value="3"> 4-6 hrs </option>
                                                                            <option value="4"> Disturbed sleep </option>
                                                                            <option value="5"> Insomnia </option>
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="vertical-align:middle">
                                                                    <span id="error210">
                                                                        <strong>11.</strong> Do you work in Shifts? <font color="RED"> * </font>
                                                                    </span>
                                                                    <BR />
                                                                </td>
                                                                <td class="segmented-button"  style="padding-top: 22px;">
                                                                                    <div class="form-group segmented-button">
                                                                                        <input id="op4014" name="q411" type="radio" value="1" >
                                                                                        <label for="op1014">Yes</label>
                    
                                                                                        <input id="op4015" name="q411" type="radio" value="0" >
                                                                                        <label for="op1015">No</label>
                                                                                        <input id="op1016" name="q411" type="radio" value="2" >
                                                                                        <label for="op4016">Others</label>
                                                                                    </div>
                                                                                    <textarea  class="form-control hide" name="q411" id="op4017" cols="60" rows="2" placeholder="Specify If any"></textarea  class="form-control">
                                                                </td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td style="vertical-align:middle">
                                                                    <span id="error211">
                                                                        <strong>12.</strong> Tea/ Coffee intake per day <font color="RED"> * </font>
                                                                    </span>
                                                                    <BR />
                                                                </td>
                                                                <td class="segmented-button" style="vertical-align:middle; padding-bottom:10px">
                                                                    <div class="form-group segmented-button options">
                    
                                                                        <select disabled class="form-control" name="q112" id="op4018">
                                                                            <option value="-1" disabled selected=""> -- Select -- </option>
                                                                            <option value="1"> 1-2 cups/day </option>
                                                                            <option value="2"> 2-3 cups/day </option>
                                                                            <option value="3"> More than 3 cups/day </option>
                                                                            <option value="4"> Occasional </option>
                                                                            <option value="5"> Never </option>
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                    
                                                            <tr>
                                                                <td style="vertical-align:middle">
                                                                    <span id="error212">
                                                                        <strong>13.</strong> How comfortable are you in taking Herbal tea/ Coffees? <font color="RED"> * </font>
                                                                    </span>
                                                                    <BR />
                                                                </td>
                                                                <td class="segmented-button" style="vertical-align:middle; padding-bottom:10px">
                                                                    <div class="form-group segmented-button options">
                    
                                                                        <select disabled class="form-control" name="q113" id="op4019">
                                                                            <option value="-1" disabled selected=""> -- Select -- </option>
                                                                            <option value="1"> Comfortable </option>
                                                                            <option value="2"> Uncomfortable </option>
                                                                            <option value="3"> Can try </option>
                                                                            <option value="4"> Cannot take at all </option>
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                    
                                                             <tr>
                                                                <td style="vertical-align:middle;">
                                                                    <span id="error213">
                                                                        <strong>14.</strong> Type of Oil used for cooking majorly at home <font color="RED"> * </font>
                                                                    </span>
                                                                    <BR />
                                                                </td>
                                                                <td class="segmented-button" style="vertical-align:middle; padding-bottom:10px">
                                                                    <div class="form-group segmented-button options">
                    
                                                                        <select disabled class="form-control" name="q414" id="op4020">
                                                                            <option value="-1" disabled selected=""> -- Select -- </option>
                                                                            <option value="1"> Sunflower </option>
                                                                            <option value="2"> Groundnut </option>
                                                                            <option value="3"> Coconut </option>
                                                                            <option value="4"> Ricebran </option>
                                                                            <option value="5"> Olive </option>
                                                                            <option value="6"> Canola </option>
                                                                            <option value="7"> Soyabean </option>
                                                                            <option value="8"> Mustard </option>
                                                                            <option value="9"> Cold Pressed </option>
                                                                            <option value="OTH">Any Other </option>
                                                                        </select>
                                                                       <textarea  class="form-control hide" name="q414" id="op4021" cols="60" rows="2"></textarea  class="form-control">
                                                                    </div>
                                                                </td>
                                                            </tr>
                    
                                                            <tr>
                                                                <td style="vertical-align:middle; padding-bottom:10px;">
                                                                    <span id="error214">
                                                                        <strong>15.</strong> List of food allergies <font color="RED"> * </font>
                                                                    </span>
                                                                </td>
                                                                <td class="segmented-button" style="vertical-align:middle">
                                                                    <div class="form-group segmented-button options">
                                                                
                                                                    <input id="op4022" name="q415" type="radio" value="0" >
                                                                    <label for="op1022">None</label>
                    
                                                                    <input id="op4023" name="q415" type="radio" value="1" >
                                                                    <label for="op4023">Yes</label>  
                                                                    </div>
                                                                <textarea  class="form-control hide" name="q415" id="op1024" cols="60" rows="2"></textarea  class="form-control"> 
                                                                </td>
                    
                                                            </tr>
                                                             <tr>
                                                                <td style="vertical-align:middle; padding-bottom:10px; border-bottom-width: 0px;">
                                                                    <span id="error215">
                                                                        <strong>16.</strong> Geographical location <font color="RED"> * </font>
                                                                    </span>
                                                                <BR/>
                                                                </td>
                                                                <td class="segmented-button" style="padding-bottom:10px; border-bottom-width: 0px;">
                                                                    <div class="form-group segmented-button options">
                    
                                                                        <select disabled class="form-control" name="q116" id="op4025">
                                                                            <option value="-1" disabled selected=""> -- Select -- </option>
                                                                            <option value="1"> North </option>
                                                                            <option value="2"> South </option>
                                                                            <option value="3"> East </option>
                                                                            <option value="4"> West </option>
                                                                            <option value="OTH">Any Other </option>
                                                                        </select>
                                                                       <textarea  class="form-control hide" name="q116" id="op1026" cols="60" rows="2"></textarea  class="form-control">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class=" smallcontainer">
                                                        <h4 class="heading">Diet Recall </h4>
                                                    </div>
                                                    <div class="portlet-body mt-4">
                                                        <table style="max-width:100%" class="table">
                                                            <tr>
                                                                <td style="vertical-align:middle;">
                                                                    <span id="error216">
                                                                        <strong>17. a)</strong> Wake up <font color="RED"> * </font>
                                                                    </span>
                                                                    <BR />
                                                                </td>
                                                                <td style="vertical-align:middle; padding-bottom:10px;">
                                                                    <div class="form-group">
                                                                        <input disabled type="text" class="form-control" id="op4027" name="q417">
                                                                        <!-- <textarea disabled class="form-control " name="q417" id="mini-mse-q3" cols="60" rows="2" placeholder="Enter your answer"></textarea> -->
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="vertical-align:middle; padding-bottom:10px; padding-left:35px;">
                                                                    <span id="error217">
                                                                        <strong>  b)</strong> Breakfast <font color="RED"> * </font>
                                                                    </span>
                                                                </td>
                                                                <td style="vertical-align:middle; padding-bottom:10px;">
                                                                    <div class="form-group">
                                                                        <input disabled type="text" class="form-control" id="op4028" name="q118">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="vertical-align:middle; padding-bottom:10px; padding-left:35px;">
                                                                    <span id="error218">
                                                                        <strong>  c)</strong> Midmorning <font color="RED"> * </font>
                                                                    </span>
                                                                </td>
                                                                <td style="vertical-align:middle; padding-bottom:10px;">
                                                                    <div class="form-group">
                                                                        <input disabled type="text" class="form-control" id="op4029" name="q119">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="vertical-align:middle; padding-bottom:10px; padding-left:35px;">
                                                                    <span id="error219">
                                                                        <strong>  d)</strong> Lunch <font color="RED"> * </font>
                                                                    </span>
                                                                </td>
                                                                <td style="vertical-align:middle; padding-bottom:10px;">
                                                                    <div class="form-group">
                                                                        <input disabled type="text" class="form-control" id="op4030" name="q120">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="vertical-align:middle; padding-bottom:10px; padding-left:35px;">
                                                                    <span id="error220">
                                                                        <strong>  e)</strong> Evening snack <font color="RED"> * </font>
                                                                    </span>
                                                                </td>
                                                                <td style="vertical-align:middle; padding-bottom:10px;">
                                                                    <div class="form-group">
                                                                        <input disabled type="text" class="form-control" id="op4031" name="q121">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="vertical-align:middle; padding-bottom:10px; padding-left:35px;">
                                                                    <span id="error221">
                                                                        <strong>  f)</strong> Dinner <font color="RED"> * </font>
                                                                    </span>
                                                                </td>
                                                                <td style="vertical-align:middle; padding-bottom:10px;">
                                                                    <div class="form-group">
                                                                        <input disabled type="text" class="form-control" id="op4032" name="q122">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="vertical-align:middle; padding-bottom:10px; padding-left:35px;">
                                                                    <span id="error222">
                                                                        <strong>  g)</strong> Post dinner <font color="RED"> * </font>
                                                                    </span>
                                                                </td>
                                                                <td style="vertical-align:middle; padding-bottom:10px;">
                                                                    <div class="form-group">
                                                                        <input disabled type="text" class="form-control" id="op4033" name="q123">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="vertical-align:middle; padding-bottom:10px;">
                                                                    <span id="error223">
                                                                        <strong>18.</strong> Any midnight cravings? <font color="RED"> * </font>
                                                                    </span>
                                                                </td>
                                                                <td class="segmented-button"  style="padding-top: 22px;">
                                                                    <div class="form-group segmented-button">
                                                                        <input disabled id="op1034" name="q418" type="radio" value="1">
                                                                        <label for="op1034">Yes</label>
                                                                        <input disabled id="op1035" name="q418" type="radio" value="0" >
                                                                        <label for="op1035">No</label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="vertical-align:middle; padding-bottom:10px; border-bottom-width: 0px;">
                                                                    <span id="error224">
                                                                        <strong>19.</strong> Food Preference <font color="RED"> * </font>
                                                                    </span>
                                                                </td>
                                                                <td class="segmented-button" style="vertical-align:middle; padding-bottom:10px; border-bottom-width: 0px;">
                                                                    <div class="form-group segmented-button options">
                    
                                                                        <select disabled class="form-control" name="q125" id="op4036">
                                                                            <option value="-1" disabled selected=""> -- Select -- </option>
                                                                            <option value="1"> Sweet </option>
                                                                            <option value="2"> Savoury </option>
                                                                            <option value="3"> Spicy </option>
                                                                            <option value="4"> Tangy </option>
                                                                            <option value="5"> Bland </option>
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                            </tr>


                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div align="center">
                                                <div class="alert alert-success" role="alert" style="height:40px;width:500px; display: none;" id="GGSC_succ">Assessment Submitted!</div>
                                            </div>
                                            <div align="center" style="margin-right: 20px; display:none;">
                                                <input type="submit" name="submit_btn" id="submit_btn" class="submit-btn" style="background-color:#8ebe3f; border-radius:10px; height:40px; padding: 0; width:150px;" value="Submit">
                                                <div class="error" style="color:red;font-weight:bolder">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Nla end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
<script src="../../assets/lib/jquery/jquery.min.js"></script>
<script src="../../assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/lib/feather-icons/feather.min.js"></script>
<script src="../../assets/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../../assets/js/dashforge.js"></script>
<script>
    let type  ;
    let score ;
    asmtId = '<?php echo $asmt_id; ?>';
    $.ajax({
        url: apiUrl + `assessment?asmt_id=${asmtId}`,
    }).done(function(response) {
        type = response.assessments[0]['type'];
        score = response.assessments[0]['score'];
        console.log(type, score);
        $("#score").html(score);
        $("#asmtscore").html(type);
        switch (type) {
            case 'asq' :
                $('#asmt_common').show();
                $('#asmtscore').show();
                $('#asq-scoring').show();
                break;
            case 'ASQ' :
                $('#asmt_common').show();
                $('#asmtscore').show();
                $('#asq-scoring').show();
                break;
            case 'pss' :
                $('#asmt_common').show();
                $('#asmtscore').show();
                $('#pss-scoring').show();
                break;
            case 'PSS' :
                $('#asmt_common').show();
                $('#asmtscore').show();
                $('#pss-scoring').show();
                break;
            case 'rtc' :
                $('#asmt_common').show();
                $('#asmtscore').show();
                $('#rtc-scoring').show();
                break;
            case 'RTC' :
                $('#asmt_common').show();
                $('#asmtscore').show();
                $('#rtc-scoring').show();
                break;
            case 'ptsd' :
                $('#asmt_common').show();
                $('#asmtscore').show();
                $('#ptsd-scoring').show();
                break;
            case 'PTSD' :
                $('#asmt_common').show();
                $('#asmtscore').show();
                $('#ptsd-scoring').show();
                break;
            case 'MINIMSE' :
                $('#minimse-scoring').show();
                break;
            case 'MiniMSE' :
                $('#minimse-scoring').show();
                break;
            case 'minimse' :
                $('#minimse-scoring').show();
                break;
            case 'MSE' :
                $('#mse-scoring').show();
                break;
            case 'mse' :
                $('#mse-scoring').show();
                break;
            case 'BRCS' :
                $('#brcs-scoring').show();
                break;
            case 'brcs' :
                $('#brcs-scoring').show();
                break;
            case 'nla' :
                $('#nla-result').show();
            case 'NLA' :
                $('#nla-result').show();
            default :
                break;
        }
    
    // mse-start
    $(document).ready(function() {     
        if( type == 'MSE' || type == 'mse'){
            let asmt_id = '<?php echo $asmt_id; ?>';
            $.ajax({
                url: apiUrl + `mse-result?asmt_id=${asmt_id}`,

            }).done(function(response) {
                q1 = parseInt(response[0].q1);
                q2 = parseInt(response[0].q2);
                q4 = parseInt(response[0].q4);
                q5 = parseInt(response[0].q5);
                q6 = parseInt(response[0].q6);
                q8 = parseInt(response[0].q8);
                q9 = parseInt(response[0].q9);
                if(isNaN(q1)){
                    $('#op1000').val(`OTH`);
                    $('#op1001').show();
                    $('#op1001').html(`${response[0].q1}`)
                }else{
                    $('#op4000').val(`${response[0].q1}`);
                }
                if(isNaN(q2)){
                    $('#op1002').val(`OTH`);
                    $('#op1003').show();
                    $('#op1003').html(`${response[0].q2}`)
                }else{
                    $('#op1002').val(`${response[0].q2}`);
                }
                if(isNaN(q4)){
                    $('#op1007').val(`OTH`);
                    $('#op1008').show();
                    $('#op1008').html(`${response[0].q4}`)
                }else{
                    $('#op1007').val(`${response[0].q4}`);
                }
                if(isNaN(q5)){
                    $('#op1009').val(`OTH`);
                    $('#op1010').show();
                    $('#op1010').html(`${response[0].q5}`)
                }else{
                    $('#op1009').val(`${response[0].q5}`);
                }
                if(isNaN(q6)){
                    $('#op1011').val(`OTH`);
                    $('#op1012').show();
                    $('#op1012').html(`${response[0].q6}`)
                }else{
                    $('#op1011').val(`${response[0].q6}`);
                }
                if(isNaN(q8)){
                    $('#op1017').val(`OTH`);
                    $('#op1018').show();
                    $('#op1018').html(`${response[0].q8}`)
                }else{
                    $('#op1017').val(`${response[0].q8}`);
                }if(isNaN(q9)){
                    $('#op1019').val(`OTH`);
                    $('#op1020').show();
                    $('#op1020').html(`${response[0].q9}`)
                }else{
                    $('#op1019').val(`${response[0].q9}`);
                }
                
                $("input[name=q300][value=" + response[0].q12 + "]"). prop('checked', true);
                $("input[name=q301][value=" + response[0].q13 + "]"). prop('checked', true);
                $("input[name=q302][value=" + response[0].q14 + "]"). prop('checked', true);
                $("input[name=q106][value=" + response[0].q7 + "]"). prop('checked', true);
                $("input[name=q109][value=" + response[0].q10 + "]"). prop('checked', true);
                $("input[name=q110][value=" + response[0].q11 + "]"). prop('checked', true);
            })
        }else if(type == 'BRCS' || type == 'brcs'){
            console.log("hii");
            let asmt_id = '<?php echo $asmt_id; ?>';
            $.ajax({
                url: apiUrl + `brcs-result?asmt_id=${asmt_id}`,
            }).done(function(response) {
                $("input[name=q1][value=" + response[0].q1 + "]"). prop('checked', true);
                $("input[name=q2][value=" + response[0].q2 + "]"). prop('checked', true);
                $("input[name=q3][value=" + response[0].q3 + "]"). prop('checked', true);
                $("input[name=q4][value=" + response[0].q4 + "]"). prop('checked', true);
                
            })
        } else if(type == 'MINIMSE' || type == 'minimse' || type == 'MiniMSE'){
            let asmt_id = "<?php echo $asmt_id; ?>";
            $.ajax({
                url: apiUrl + `minimse-result?asmt_id=${asmt_id}`,
            }).done(function(response) {
                $('#mini-mse-q1').html(` ${response.q1} `);
                $('#mini-mse-q2').html(` ${response.q2} `);
                $('#mini-mse-q3').html(` ${response.q3} `);
                $('#mini-mse-q4').html(` ${response.q4} `);
                $('#mini-mse-q5').html(` ${response.q5} `);
                $('#mini-mse-q6').html(` ${response.q6} `);
                $('#mini-mse-q7').html(` ${response.q7} `);
                $("input[name=radio][value=" + response[0].q8 + "]"). prop('checked', true);
                $('#mini-mse-q9').html(` ${response.q9} `);
                $('#mini-mse-q10').html(` ${response.q10} `);
                $('#mini-mse-q11').html(` ${response.q11} `);
                $('#mini-mse-q12').html(` ${response.q12} `);
            })
        } else if( type == 'NLA' || type == 'nla'){
            let asmt_id = '<?php echo $asmt_id; ?>';
            $.ajax({
                url: apiUrl + `nla-result?asmt_id=${asmt_id}`,
            }).done(function(response) {

                q1 = response[0].q1;
                q2 = response[0].q2;
                q3 = response[0].q3;
                q4 = response[0].q4;
                q5 = response[0].q5;
                q6 = response[0].q6;
                q7 = response[0].q7;
                q8 = response[0].q8;
                q9 = response[0].q9;
                q10 = response[0].q10;
                q11 = response[0].q11;
                q12 = response[0].q12;
                q13 = response[0].q13;
                q14 = response[0].q14;
                q15 = response[0].q15;
                q16 = response[0].q16;
                q17a = response[0].q17;
                q17b = response[0].q18;
                q17c = response[0].q19;
                q17d = response[0].q20;
                q17e = response[0].q21;
                q17f = response[0].q22;
                q17g = response[0].q23;
                q18 = response[0].q24;
                q19 = response[0].q25;

                // text area logic

                $('#op4009').val(q7);
                $('#op4027').val(q17a);
                $('#op4028').val(q17b);
                $('#op4029').val(q17c);
                $('#op4030').val(q17d);
                $('#op4031').val(q17e);
                $('#op4032').val(q17f);
                $('#op4033').val(q17g);

                if( $.type(q1) === 'string'){
                    $('#op4000').val(`${response[0].q1}`);
                } if ( $.type(q2) === 'string' ){
                    console.log(q2, 'ASQ')
                    $('#op4001').val(q2);
                } if ( $.type(q3) === 'string' ){
                    $('#op4002').val(q3);
                }  if ( $.type(q4) === 'string' && q4.length == 1){
                    $('#op4003').val(q4);
                    ;
                    $('#4004').hide();
                } else {
                    $('#op4003').hide();
                    $('#op4004').val(q4);
                    //$('#op4003').hide();
                    //$('#op4003').val(`OTH`);
                    //$('#op4003').show();
                    //$('#op4003').html(`${response[0].q6}`)
                    console.log('else working')
                } if ( $.type(q6) === 'string' ) {
                    $('#op4008').val(q6);
                } if ( $.type(q8) === 'string' ) {
                    $('#op4011').val(q8);
                } if ( $.type(q9) === 'string' ) {
                    $('#op4012').val(q9);
                } if ( $.type(q10) === 'string' ) {
                    $('#op4013').val(q10);
                } if ( $.type(q12) === 'string' ) {
                    $('#op4018').val(q12);
                } if ( $.type(q13) === 'string' ) {
                    $('#op4019').val(q13);
                } if ( $.type(q14) === 'string' && q4.length == 1 ) {
                    $('#op4020').val(q14);
                } if ( $.type(q15) === 'string' ) {
                    $('#op4025').val(q15);
                } if ( $.type(q19) === 'string') {
                    $('#op4036').val(q15);
                }

                // input logic here 
                $("input[name=q4005][value=" + response[0].q5 + "]"). prop('checked', true); 
                $("input[name=q417][value=" + response[0].q5 + "]"). prop('checked', true); 
                $("input[name=q418][value=" + response[0].q5 + "]"). prop('checked', true); 

            })
        }
    });
});
</script>
        <?php include 'footer.php' ?>
    </body>
</html>