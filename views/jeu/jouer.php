                <div class="container col-9 fixed-top fixed-bottom rounded p-0 bg-colorD" style="top: 15%; bottom: 1%;">
                    <div class="container-fluid rounded-top w-100 bg-colorA  d-flex justify-content-center p-1">
                        <div class="container">
                            <div class="">
                                <img src="<?=WEBROOT?>assets/images/01.jpg" alt="" class="rounded-circle float-left mr-5" style="width: 30%; height: 30%;">
                                <h6 class="text-white">
                                    Nom User
                                </h6>
                                
                            </div>
                        </div>
                        <div class="col-9 w-100 mr-5 mt-2">
                            <h3 class="text-white float-right "style="font-size: 1.30rem;margin-right:180px;">BIENVENUE SUR LA PLATEFORME DE JEU DE QUIZZ</h3>
                            <h3 class="text-white float-right"style="font-size: 1.30rem;margin-right:145px;">JOUER ET TESTER VOTRE NIVEAU DE CULTURE GENERALE</h3>
                        </div>

                        <div class="col-1 ">
                            <!--<button type="button" class="btn bg-colorC float-right border-top rounded text-white shadow mt-4 " style="text-shadow:1px 1px 2px black;">
                                Deconnexion
                            </button>-->
                            <form method="post" action="<?=WEBROOT?>security/seDeconnecter">
                                <button type="submit" name="btn_deconnexion" value="" class="btn float-right text-white bg-colorC border-top shadow mt-3" style="text-shadow: 1px 1px 2px black;">
                                    Deconnexion
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="container col-11 w-100 m-auto d-flex justify-content-space-around border p-auto " style="background-color:white;top:3%; height:77%; ">
                        <div class="question border border-info rounded-sm d-flex m-auto" style="height:395px; width:595px;">
                            <div class="container1 border border-0 bg-light ml-2 mt-2"style="height:100px; width:570px;">
                                <h2 class="text-center font-italic"><ins>Question 1/5</ins></h2>
                                <h3 class="text-center font-weight-normal ">les langages web</h3>
                                <a href="#" class="btn btn-light disabled float-right mt-3 bg-light text-dark" role="button" aria-disabled="true">3pts</a>
                                
                                <div class="container ml-5 mt-5">
                                    <form class="" methode="">
                                    
                                                <div class="form-check ">
                                                    <input class=" form-check-input " id="chk_0_1" type="checkbox">
                                                    <label class="form-check-label" for="ck1">
                                                        <h4>
                                                            HTML
                                                        </h4>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input"size = "lg " type="checkbox">
                                                    <label class="form-check-label" for="ck2"><h4>R</h4></label>
                                                </div>
                                                
                                                <div class="form-check  ">
                                                    <input class="form-check-input check" type="checkbox" name="radio">
                                                    <label class="form-check-label" for="radio1"> <h4>JAVA</h4></label>
                                                </div>
                                                
                                    </form>    
                                </div>
                                <div class="container ml-1 mt-5">
                                    <button class=" float-right mt-3 bg-info text-white btn-lg" type="button">suivant</button>
                                </div>
                                <div class="container mt-1 bg-">
                                    <button class="mt-2 text-white bg-secondary btn-lg " type="button">precedant</button>
                                </div>
                            
                            </div> 
                        </div>
                        <div class="menu border border-top-0  w-70 m-auto h-75 shadow rounded">
                         
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#home">
                                            Top score
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " data-toggle="tab" href="#menu1">
                                            mon meilleur score
                                        </a>           
                                    </li>   
                                </ul>

                            <div class="tab-content mt-2">
                                <div class="tab-pane container active" id="home">
                                    
                                    <div class="score">
                                        <h5>  
                                            <span class="float_l">
                                                Alex Cleyton 
                                            </span>
                                            <span class="float_r ml-2 score1">
                                                53 pts
                                            </span> 
                                        </h5>
                                    </div>
                                    <div class="score">
                                        <h5>  
                                            <span class="float_l">
                                                Bouanga Adama 
                                            </span>
                                            <span class="float_r ml-2 score2">
                                                47 pts
                                            </span> 
                                        </h5>
                                    </div>
                                    
                                    <div class="score">
                                        <h5>  
                                            <span class="float_l">
                                                Fatou Moubamba 
                                            </span>
                                            <span class="float_r ml-2 score3">
                                                0 pts
                                            </span> 
                                        </h5>
                                    </div>
                                    <div class="score">
                                        <h5>  
                                            <span class="float_l">
                                                mohamed Moussounda 
                                            </span>
                                            <span class="float_r ml-2 score4">
                                                0 pts
                                            </span> 
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane container fade" id="menu1">
                                <h2>
                                    0 Pts
                                </h2>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
