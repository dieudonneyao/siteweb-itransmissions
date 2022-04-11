<div class="card-header">
    <h5 class="card-header-text">A propos de moi</h5>
    <button id="edit-btn" type="button"
        class="btn btn-sm btn-primary waves-effect waves-light f-right">
        <i class="icofont icofont-edit"></i>
    </button>
</div>


<div class="card-block">

    <div class="view-info">
        <div class="row">
            <div class="col-lg-12">
                <div class="general-info">
                    <div class="row">

                        <div class="col-lg-12 col-xl-6">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                Nom & Prénom
                                            </th>
                                            <td>{{$user_auth->full_name}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                Nom utilisateur
                                            </th>
                                            <td>{{$user_auth->name}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                Genre</th>
                                            <td>{{$user_auth->genre}}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- end of table col-lg-6 -->
                        <div class="col-lg-12 col-xl-6">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                Email</th>
                                            <td><a
                                                    href="#!">{{$user_auth->email}}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                Contact</th>
                                            <td>{{$user_auth->contact}}</td>
                                        </tr>

                                        <tr>
                                            <th scope="row">
                                                Website</th>
                                            <td><a
                                                    href="http://itansmission.afran2021.org/">itansmission</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end of table col-lg-6 -->
                    </div>
                    <!-- end of row -->
                </div>
                <!-- end of general info -->
            </div>
            <!-- end of col-lg-12 -->
        </div>
        <!-- end of row -->
    </div>



    <!-- end of view-info -->
    <div class="edit-info">
        <div class="row">
            <div class="col-lg-12">
                <div class="general-info">

                    <div class="row">
                        <div class="col-lg-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div
                                                class="input-group">
                                                <span
                                                    class="input-group-addon"><i
                                                        class="icofont icofont-user"></i></span>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Full Name">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div
                                                class="form-radio">
                                                <div
                                                    class="group-add-on">
                                                    <div
                                                        class="radio radiofill radio-inline">
                                                        <label>
                                                            <input
                                                                type="radio"
                                                                name="radio"
                                                                checked><i
                                                                class="helper"></i>
                                                            Male
                                                        </label>
                                                    </div>
                                                    <div
                                                        class="radio radiofill radio-inline">
                                                        <label>
                                                            <input
                                                                type="radio"
                                                                name="radio"><i
                                                                class="helper"></i>
                                                            Female
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input
                                                id="dropper-default"
                                                class="form-control"
                                                type="text"
                                                placeholder="Select Your Birth Date" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select
                                                id="hello-single"
                                                class="form-control">
                                                <option
                                                    value="">
                                                    ----
                                                    Marital
                                                    Status
                                                    ----
                                                </option>
                                                <option
                                                    value="married">
                                                    Married
                                                </option>
                                                <option
                                                    value="unmarried">
                                                    Unmarried
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div
                                                class="input-group">
                                                <span
                                                    class="input-group-addon"><i
                                                        class="icofont icofont-location-pin"></i></span>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Address">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- end of table col-lg-6 -->
                        <div class="col-lg-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div
                                                class="input-group">
                                                <span
                                                    class="input-group-addon"><i
                                                        class="icofont icofont-mobile-phone"></i></span>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Mobile Number">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div
                                                class="input-group">
                                                <span
                                                    class="input-group-addon"><i
                                                        class="icofont icofont-social-twitter"></i></span>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Twitter Id">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div
                                                class="input-group">
                                                <span
                                                    class="input-group-addon"><i
                                                        class="icofont icofont-social-skype"></i></span>
                                                <input
                                                    type="email"
                                                    class="form-control"
                                                    placeholder="Skype Id">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div
                                                class="input-group">
                                                <span
                                                    class="input-group-addon"><i
                                                        class="icofont icofont-earth"></i></span>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="website">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end of table col-lg-6 -->
                    </div>
                    <!-- end of row -->
                    <div class="text-center">
                        <a href="#!"
                            class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                        <a href="#!" id="edit-cancel"
                            class="btn btn-default waves-effect">Cancel</a>
                    </div>
                </div>
                <!-- end of edit info -->
            </div>
            <!-- end of col-lg-12 -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of edit-info -->

</div>
