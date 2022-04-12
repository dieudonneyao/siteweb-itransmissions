<div class="tab-pane" id="contacts" role="tabpanel">

    <div class="row">

        <div class="col-xl-3">
            <!-- user contact card left side start -->
            <div class="card">

                <div class="card-header contact-user">
                    {{-- <img class="img-radius img-40"
                        src="../files/assets/images/avatar-4.jpg"
                        alt="contact-user"> --}}
                    <h5 class="m-l-10">{{Auth::user()->name}}</h5>
                </div>

                <div class="card-block">
                    <ul class="list-group list-contacts">
                        <li class="list-group-item active"><a
                                href="">Utilisateur</a></li>
                        <li class="list-group-item"><a
                                href="">Utilisateurs recents</a></li>
                        <li class="list-group-item"><a
                                href="">Favourite Contacts</a></li>
                    </ul>
                </div>

                <div class="card-block groups-contact">
                    <h4>Groupes</h4>
                    <ul class="list-group">
                        <li
                            class="list-group-item justify-content-between">
                            Super_administrateur
                            <span
                                class="badge badge-primary badge-pill">{{$user_role1}}</span>
                        </li>
                        <li
                            class="list-group-item justify-content-between">
                            Administrateur
                            <span
                                class="badge badge-success badge-pill">{{$user_role2}}</span>
                        </li>
                        <li
                            class="list-group-item justify-content-between">
                            Utilisateur
                            <span
                                class="badge badge-info badge-pill">{{$user_role3}}</span>
                        </li>

                    </ul>
                </div>

            </div>
            <!-- user contact card left side end -->
        </div>

        <div class="col-xl-9">
            <div class="row">
                <div class="col-sm-12">
                    <!-- contact data table card start -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Utilisateurs</h5>
                        </div>
                        <div class="card-block contact-details">

                            <div
                                class="data_table_main table-responsive dt-responsive">
                                <table id="simpletable"
                                    class="table  table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>Nom & Prénom</th>
                                            <th>Nom utilisateur</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th>Rôle</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $item)
                                        <tr>
                                            <td>{{$item->full_name}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->contact}}</td>

                                            <td>
                                                @if(!empty($item->getRoleNames()))
                                                    @foreach($item->getRoleNames() as $v)
                                                        <label class="badge badge-success">{{ $v }}</label>
                                                    @endforeach
                                                @endif
                                            </td>

                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i class="fa fa-cog"aria-hidden="true"></i>
                                                </button>

                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">

                                                    <form action="{{route('admin.user.delete',$item->id)}}" method="post">
                                                        <a class="dropdown-item"
                                                            href=""><i
                                                                class="icofont icofont-edit"></i>Edit</a>


                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" style="border:none">
                                                            <a class="dropdown-item"><i
                                                                class="icofont icofont-ui-delete"></i>Delete
                                                            </a>
                                                        </button>


                                                    </form>

                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach


                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <th>Nom & Prénom</th>
                                            <th>Nom utilisateur</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th>Rôle</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>

                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- contact data table card end -->
                </div>
            </div>
        </div>

    </div>

</div>
