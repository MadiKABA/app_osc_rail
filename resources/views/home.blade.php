@extends('welcome')

@section('content')
    <div class="container">

        <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">
            <div class="col">
                <div class="p-3 border bg-white shadow-sm d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
                        <path fill="#699bf7"
                            d="M12 10a4 4 0 1 0 0-8a4 4 0 0 0 0 8Zm-6.5 3a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5ZM21 10.5a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0Zm-9 .5a5 5 0 0 1 5 5v6H7v-6a5 5 0 0 1 5-5Zm-7 5c0-.693.1-1.362.288-1.994l-.17.014A3.5 3.5 0 0 0 2 17.5V22h3v-6Zm17 6v-4.5a3.5 3.5 0 0 0-3.288-3.494c.187.632.288 1.301.288 1.994v6h3Z" />
                    </svg>
                    <div class="ms-3">
                        <p class="py-0 my-0 fw-bold">Total Membres</p>
                        <p class="py-0 my-0 fw-bold" style="color: #699bf7; font-size: 26px">500</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="p-3 border  bg-white shadow-sm d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32">
                        <g fill="#699bf7">
                            <path
                                d="M15.941 10a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5Zm-4.808 2.424a2 2 0 0 1 1.933-1.486h5.904a2 2 0 0 1 1.93 1.475l1.159 4.262a1 1 0 0 1-1.93.525l-1.056-3.885a.461.461 0 0 0-.495-.335a.455.455 0 0 0-.406.45h-.001l1.892 6.954a.5.5 0 0 1-.483.632H18.5V26a1 1 0 0 1-1.048.999c-.538-.025-.952-.488-.952-1.027v-4.456a.5.5 0 1 0-1 0V26a1 1 0 0 1-1.048.999c-.538-.025-.952-.488-.952-1.027v-4.956h-1.06a.5.5 0 0 1-.481-.635l1.932-6.912h-.008a.472.472 0 0 0-.445-.471l-.126-.007a.303.303 0 0 0-.31.224l-1.067 3.98a1 1 0 1 1-1.933-.514l1.131-4.257Z" />
                            <path
                                d="M6 1a5 5 0 0 0-5 5v20a5 5 0 0 0 5 5h20a5 5 0 0 0 5-5V6a5 5 0 0 0-5-5H6ZM3 6a3 3 0 0 1 3-3h20a3 3 0 0 1 3 3v20a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Z" />
                        </g>
                    </svg>
                    <div class="ms-3">
                        <p class="py-0 my-0 fw-bold">Total Femmes</p>
                        <p class="py-0 my-0 fw-bold" style="color: #699bf7; font-size: 26px">300</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="p-3 border  bg-white shadow-sm d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32">
                        <g fill="#699bf7">
                            <path
                                d="M15.941 10a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5Zm3.332.938h-6.546c-1.23 0-2.227.997-2.227 2.227v5.156c0 .539.414 1.002.952 1.027a1 1 0 0 0 1.048-.999v-4.372a.501.501 0 1 1 1.002 0v11.995c0 .539.414 1.002.952 1.027A1 1 0 0 0 15.502 26v-5.852a.5.5 0 1 1 1 0v5.824c0 .539.414 1.002.952 1.027A1 1 0 0 0 18.503 26V13.975a.499.499 0 0 1 .997 0v4.375a1 1 0 0 0 1.048.999c.538-.026.952-.489.952-1.027v-5.156a2.228 2.228 0 0 0-2.227-2.229Z" />
                            <path fill-rule="evenodd"
                                d="M6 1a5 5 0 0 0-5 5v20a5 5 0 0 0 5 5h20a5 5 0 0 0 5-5V6a5 5 0 0 0-5-5H6ZM3 6a3 3 0 0 1 3-3h20a3 3 0 0 1 3 3v20a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Z"
                                clip-rule="evenodd" />
                        </g>
                    </svg>
                    <div class="ms-3">
                        <p class="py-0 my-0 fw-bold">Total Hommes</p>
                        <p class="py-0 my-0 fw-bold" style="color: #699bf7; font-size: 26px">200</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="row row-cols-2 row-cols-lg-2 g-2 g-lg-3 mt-3">
            <div class="col">
                <div style="border:3px solid #699bf7">
                    <div class="px-2 py-2" style="background-color: #699bf7">
                        <p class="fw-bold fs-4 text-white">Total Par Departements</p>
                    </div>
                    <table>
                        <tr>
                            <th>Departement</th>
                            <th>Total</th>
                        </tr>
                        <tr>
                            <td>Dakar</td>
                            <td>30</td>
                        </tr>
                        <!-- Répétez les lignes ci-dessus pour chaque membre. -->
                    </table>
                </div>
            </div>
            <div class="col">
                <div class="" style="border:3px solid #699bf7">
                    <div class="px-2 py-2" style="background-color: #699bf7">
                        <p class="fw-bold fs-4 text-white">Total Par Domaine d’activites</p>
                    </div>
                    <table>
                        <tr>
                            <th>Activitée</th>
                            <th>Total</th>
                        </tr>
                        <tr>
                            <td>maraicher</td>
                            <td>20</td>
                        </tr>
                        <!-- Répétez les lignes ci-dessus pour chaque membre. -->
                    </table>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
