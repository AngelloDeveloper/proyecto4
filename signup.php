<?php 

    require('app/conexion/connection.php');
    require('app/assets/models/class/user.php');
    require('app/assets/models/class/affiliate.php');
    require('app/assets/models/class/room.php');
    require('app/assets/models/class/direction.php');

    $objUser = new user();
    $objAffiliate = new affiliate;
    $objRoom = new room();
    $objDirection = new direction();
    // if(!empty($_POST['reg_user']) && !empty($_POST['reg_afi']) && !empty($_POST['reg_dir']) && !empty($_POST['reg_hab'])) {
    //        $insertUser = $objUser->insertUser($_POST['email'], $_POST['password']);
    //         echo $insertUser;
    //         $insertAffiliate = $objAffiliate->insertAffiliate($_POST['dni'],
    //                                                                 $_POST['firstName'],
    //                                                                 $_POST['lasttName'],
    //                                                                 $_POST['birth'],
    //                                                                 $_POST['phone'],
    //                                                                 $_POST['email'],                                                        
    //                                                                 $_POST['age'],
    //                                                                 $_POST['status']
    //                                                                 );
    //         echo $insertAffiliate;
            
    //         $insertDirection = $objDirection->insertDirection($_POST['country'],
    //                                                             $_POST['state'],
    //                                                             $_POST['municipality'],
    //                                                             $_POST['town'],
    //                                                             $_POST['postalCode']       
    //             );
    //             echo $insertDirection;
        
    //             $insertRoom = $objRoom->insertRoom($_POST['home'],
    //                                                 $_POST['sector'],
    //                                                 $_POST['street']        
    //                                                 );
    //             echo $insertRoom;
    //     }

    if(!empty($_POST['reg_user'])) {
       $insertUser = $objUser->insertUser($_POST['email'], $objUser->encrypt($_POST['password'])s);
       echo $insertUser;
    }
    if(!empty($_POST['reg_afi'])){
        $insertAffiliate = $objAffiliate->insertAffiliate($_POST['dni'],
                                                            $_POST['firstName'],
                                                            $_POST['lasttName'],
                                                            $_POST['birth'],
                                                            $_POST['phone'],
                                                            $_POST['email'],                                                        
                                                            $_POST['age'],
                                                            $_POST['status']
                                                            );
        echo $insertAffiliate;
    }
    if(!empty($_POST['reg_dir']) && !empty($_POST['reg_hab'])) {
         $insertDirection = $objDirection->insertDirection($_POST['country'],
                                                        $_POST['state'],
                                                        $_POST['municipality'],
                                                        $_POST['town'],
                                                        $_POST['postalCode']       
        );
        echo $insertDirection;

        $insertRoom = $objRoom->insertRoom($_POST['home'],
                                            $_POST['sector'],
                                            $_POST['street']        
                                            );
        echo $insertRoom;
        
     }



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registro - Funpisunet</title>
        <link href="app/assets/css/styles-sb-admin.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main >
                    <div class="container">
                    <div class="row justify-content-center">
                    <div class="col-lg-7"> 
                    <div id="parte1" class="card shadow-lg border-0 rounded-lg mt-5">
                    <!-- PARTE 1 -->
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-3">Dato del Afiliado</h3>
                    </div>
                    <div class="card-body ">
                    <form  action="signup.php" method="post"> 
                        <input type="hidden" name="reg_afi" value="true"/>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputFirstName" name="firstName" type="text" placeholder="Enter your first name" />
                                    <label for="inputFirstName">Nombre Completo</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputFirstName" name="lasttName" type="text" placeholder="Enter your first name" />
                                    <label for="inputLastName">Apellido Completo</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputEmail" name="email" type="email" placeholder="name@example.com" />
                            <label for="inputEmail">Direccion de Correo Electrónico</label>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputPassword" name="dni" type="text" placeholder="Create a password" />
                                    <label for="inputDni">Cédula de Identidad</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="" name="birth" type="date" placeholder="Confirm password" />
                                    <label for="inputBirth">Fecha de Nacimiento</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="" name="phone" type="text" placeholder="Create a password" />
                                    <label for="inputPhone">Número Telefónico</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <select class="form-select" name="age"aria-label="Default select example">
                                                            <option selected>Seleccione su edad</option>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                            <option value="32">32</option>
                                                            <option value="33">33</option>
                                                            <option value="34">34</option>
                                                            <option value="35">35</option>
                                                            <option value="36">36</option>
                                                            <option value="37">37</option>
                                                            <option value="38">38</option>
                                                            <option value="39">39</option>
                                                            <option value="40">40</option>
                                                            <option value="41">41</option>
                                                            <option value="42">42</option>
                                                            <option value="43">43</option>
                                                            <option value="44">44</option>
                                                            <option value="45">45</option>
                                                            <option value="46">46</option>
                                                            <option value="47">47</option>
                                                            <option value="48">48</option>
                                                            <option value="49">49</option>
                                                            <option value="50">50</option>
                                                            <option value="51">51</option>
                                                            <option value="52">52</option>
                                                            <option value="53">53</option>
                                                            <option value="54">54</option>
                                                            <option value="55">55</option>
                                                            <option value="56">56</option>
                                                            <option value="57">57</option>
                                                            <option value="58">58</option>
                                                            <option value="59">59</option>
                                                            <option value="60">60</option>
                                                            <option value="61">61</option>
                                                            <option value="62">62</option>
                                                            <option value="63">63</option>
                                                            <option value="64">64</option>
                                                            <option value="65">65</option>
                                                            <option value="66">66</option>
                                                            <option value="67">67</option>
                                                            <option value="68">68</option>
                                                            <option value="69">69</option>
                                                            <option value="70">70</option>
                                                            <option value="71">71</option>
                                                            <option value="72">72</option>
                                                            <option value="73">73</option>
                                                            <option value="74">74</option>
                                                            <option value="75">75</option>
                                                            <option value="76">76</option>
                                                            <option value="77">77</option>
                                                            <option value="78">78</option>
                                                            <option value="79">79</option>
                                                            <option value="80">80 o más</option>
                                    </select>
                                    <label for="inputAge">Edad</label>
                                </div>
                            </div>
                        </div>                                                
                        <div class="mt-4 mb-0 row">
                                                    <!-- <div class="d-grid offset-5 col-md-5">
                                                        <input class="form-control btn btn-primary " type="submit" name="status" value="Crear una cuenta">
                                                    </div> -->
                            <div class="d-grid offset-3  col-md-6">
                                <!-- <button type="button" class="form-control btn btn-primary step__button step__button--next" data-to_step="2" data-step="1">Siguiente</button> -->
                            </div>
                        </div>
                    </form>
                    </div>
                                    
                    <!-- PARTE 2 -->
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-3">Ubicación del Afiliado</h3>
                    </div>
                    <div class="card-body ">
                    <form action="signup.php" method="post">
                        <input type="hidden" name="reg_dir" value="true"/>
                        <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input class="form-control" id="inputFirstName" name="country" type="text" placeholder="Enter your first name" />
                                                            <label for="inputFirstName">País</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input class="form-control" id="inputFirstName" name="state" type="text" placeholder="Enter your first name" />
                                                            <label for="inputLastName">Estado</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="" name="postalCode" type="text" placeholder="Confirm password" />
                                                    <label for="inputBirth">Código Postal</label>
                                                </div>

                                                <div class="row mb-3">
                                                     <div class="col-md-6">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input class="form-control" id="inputEmail" name="municipality" type="text" placeholder="name@example.com" />
                                                             <label for="inputEmail">Municipio</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input class="form-control" id="inputPassword" name="town" type="text" placeholder="Create a password" />
                                                            <label for="inputDni">Ciudad</label>
                                                        </div>
                                                    </div>
                                                </div>                                                                                           
                                                   
                                             
                                          <!-- FORM 2 -->
                                        <form action="signup.php" method="post"> 
                                                <input type="hidden" name="reg_hab" value="true"/>
                                               
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="" name="home" type="text" placeholder="Create a password" />
                                                    <label for="inputPhone">Número de Casa</label>
                                                 </div>   
                                                
                                                <div class="mb-3 row">
                                                    <div class="col-md-6">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input class="form-control" id="" name="sector" type="text" placeholder="Create a password" />
                                                            <label for="inputPhone">Sector</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input class="form-control" id="" name="street" type="text" placeholder="Create a password" />
                                                            <label for="inputPhone">Calle</label>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="mt-4 mb-0 row">
                                                    <!-- <div class="d-grid">
                                                        <input class="form-control btn btn-primary col-md-5" type="submit" name="status"value="Crear una cuenta">
                                                    </div> -->
                                                    <div class="d-grid offset-1 col-md-5 step__footer">
                                                        <!-- <button type="button" class="btn btn-primary step__button step__button--back" data-to_step="1" data-step="2">Regresar</button> -->
                                                    </div>
                                                    <div class="d-grid   col-md-5 step__footer">
                                                        <!-- <button type="button" class="btn btn-primary step__button step__button--next" data-to_step="3" data-step="2">Siguiente</button> -->
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- FIN FORM -->
                                               
                        
                    </form>
                    </div>
                                    
                    <!-- PARTE 3 -->
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-3">Crear cuenta del Afiliado</h3>
                    </div>
                    <div class="card-body ">
                    <form action="signup.php" method="post">
                    <input type="hidden" name="reg_user" value="true" />
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputEmail" name="email" type="email" placeholder="name@example.com" />
                        <label for="inputEmail">Dirección de Correo Electrónico</label>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="inputPassword"name="password" type="password" placeholder="Create a password" />
                                <label for="inputPassword">Contraseña</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirmar Contraseña" />
                                <label for="inputPasswordConfirm">Confirmar Contraseña</label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-0">
                        <div class="d-grid">
                            <input class="form-control btn btn-primary col-md-5" type="submit" value="Crear una cuenta">
                            <!-- <a class="btn btn-primary btn-block" href="login.html">Create Account</a> -->
                        </div>
                    </div>
                    </form>
                    </div>
                                    
                    </div>
                    </div>
                    </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="app/assets/js/scripts-sb-admin.js"></script>
    </body>
</html>
