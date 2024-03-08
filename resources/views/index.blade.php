@extends('layout.master')
@section('content')
    <div class="tab-content">


        <div class="tab-pane active" id="currentweek" role="tabpanel" aria-labelledby="currentweek-tab">
            <div class="container-fluid current-head">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>Current Week</h2>
                    </div>
                    <div class="col-lg-6">
                        <a id="" class="btn btn-primary" href="{{route('create-record')}}" role="button">Add Record</a>
                    </div>
                </div>
            </div>
            <div class="mainTable">
                <div class="container-fluid">
                    <div class="topTable">
                        <table class="table" id="topTable">
                            <thead class="">
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        </th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="pinkHighlight">YLD</td>
                                    <td>
                                        </th>
                                    <td class="pinkHighlight">YLD</td>
                                    <td></td>
                                    <td class="pinkHighlight">YLD</td>
                                </tr>
                                <tr class="hoverHighlight">
                                    <td class="heading">MTHLY</td>
                                    <td>5000</td>
                                    <td> </td>
                                    <td>500</td>
                                    <td class="pinkHighlight">17%</td>
                                    <td>50</td>
                                    <td class="pinkHighlight">17%</td>
                                    <td>50</td>
                                    <td class="pinkHighlight">17%</td>
                                </tr>
                                <tr class="hoverHighlight">
                                    <td class="heading">MTHLY</td>
                                    <td>5000</td>
                                    <td> </td>
                                    <td>500</td>
                                    <td></td>
                                    <td>50</td>
                                    <td></td>
                                    <td>50</td>
                                    <td></td>
                                </tr>
                                <tr class="hoverHighlight">
                                    <td class="heading">MTHLY</td>
                                    <td>5000</td>
                                    <td> </td>
                                    <td>500</td>
                                    <td></td>
                                    <td>50</td>
                                    <td></td>
                                    <td>50</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="bottomTable">
                        <table class="table" id="mainTable">
                            <thead class="">
                                <tr>
                                    <th>LGA</th>
                                    <th>SCR</th>
                                    <th class="bluebackground">PERF</th>
                                    <th>PRES</th>
                                    <th class="bluebackground">PERF</th>
                                    <th>POS</th>
                                    <th class="bluebackground">PERF</th>
                                    <th>LKD</th>
                                    <th class="bluebackground">PERF</th>
                                    <th>NEG</th>
                                    <th>PEND</th>
                                    <th>INVALID</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="overflow-auto">
                                <tr>
                                    <td>AJR</td>
                                    <td>125</td>
                                    <td class="bluebackground">100%</td>
                                    <td>500</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>
                                        <div class="dropdown open">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId"
                                                data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Action</button>
                                            </div>
                                        </div>
                                        <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>AJR</td>
                                    <td>125</td>
                                    <td class="bluebackground">100%</td>
                                    <td>500</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>
                                        <div class="dropdown open">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId"
                                                data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Action</button>
                                            </div>
                                        </div>
                                        <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>AJR</td>
                                    <td>125</td>
                                    <td class="bluebackground">100%</td>
                                    <td>500</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>
                                        <div class="dropdown open">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId"
                                                data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Action</button>
                                            </div>
                                        </div>
                                        <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>AJR</td>
                                    <td>125</td>
                                    <td class="bluebackground">100%</td>
                                    <td>500</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>
                                        <div class="dropdown open">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="triggerId" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Action</button>
                                            </div>
                                        </div>
                                        <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>AJR</td>
                                    <td>125</td>
                                    <td class="bluebackground">100%</td>
                                    <td>500</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>
                                        <div class="dropdown open">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="triggerId" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Action</button>
                                            </div>
                                        </div>
                                        <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>AJR</td>
                                    <td>125</td>
                                    <td class="bluebackground">100%</td>
                                    <td>500</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>
                                        <div class="dropdown open">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="triggerId" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Action</button>
                                            </div>
                                        </div>
                                        <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>AJR</td>
                                    <td>125</td>
                                    <td class="bluebackground">100%</td>
                                    <td>500</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>
                                        <div class="dropdown open">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="triggerId" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Action</button>
                                            </div>
                                        </div>
                                        <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>AJR</td>
                                    <td>125</td>
                                    <td class="bluebackground">100%</td>
                                    <td>500</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>
                                        <div class="dropdown open">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="triggerId" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Action</button>
                                            </div>
                                        </div>
                                        <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>AJR</td>
                                    <td>125</td>
                                    <td class="bluebackground">100%</td>
                                    <td>500</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>
                                        <div class="dropdown open">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="triggerId" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Action</button>
                                            </div>
                                        </div>
                                        <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>AJR</td>
                                    <td>125</td>
                                    <td class="bluebackground">100%</td>
                                    <td>500</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>
                                        <div class="dropdown open">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="triggerId" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Action</button>
                                            </div>
                                        </div>
                                        <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>AJR</td>
                                    <td>125</td>
                                    <td class="bluebackground">100%</td>
                                    <td>500</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>
                                        <div class="dropdown open">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="triggerId" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Action</button>
                                            </div>
                                        </div>
                                        <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>AJR</td>
                                    <td>125</td>
                                    <td class="bluebackground">100%</td>
                                    <td>500</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>
                                        <div class="dropdown open">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="triggerId" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Action</button>
                                            </div>
                                        </div>
                                        <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>AJR</td>
                                    <td>125</td>
                                    <td class="bluebackground">100%</td>
                                    <td>500</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>
                                        <div class="dropdown open">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="triggerId" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Action</button>
                                            </div>
                                        </div>
                                        <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>AJR</td>
                                    <td>125</td>
                                    <td class="bluebackground">100%</td>
                                    <td>500</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>
                                        <div class="dropdown open">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="triggerId" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Action</button>
                                            </div>
                                        </div>
                                        <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>AJR</td>
                                    <td>125</td>
                                    <td class="bluebackground">100%</td>
                                    <td>500</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>
                                        <div class="dropdown open">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="triggerId" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Action</button>
                                            </div>
                                        </div>
                                        <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>AJR</td>
                                    <td>125</td>
                                    <td class="bluebackground">100%</td>
                                    <td>500</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>
                                        <div class="dropdown open">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="triggerId" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Action</button>
                                            </div>
                                        </div>
                                        <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>AJR</td>
                                    <td>125</td>
                                    <td class="bluebackground">100%</td>
                                    <td>500</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>
                                        <div class="dropdown open">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="triggerId" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Action</button>
                                            </div>
                                        </div>
                                        <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>AJR</td>
                                    <td>125</td>
                                    <td class="bluebackground">100%</td>
                                    <td>500</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>
                                        <div class="dropdown open">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="triggerId" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Action</button>
                                            </div>
                                        </div>
                                        <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>AJR</td>
                                    <td>125</td>
                                    <td class="bluebackground">100%</td>
                                    <td>500</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>
                                        <div class="dropdown open">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="triggerId" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Action</button>
                                            </div>
                                        </div>
                                        <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>AJR</td>
                                    <td>125</td>
                                    <td class="bluebackground">100%</td>
                                    <td>500</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>
                                        <div class="dropdown open">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="triggerId" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Action</button>
                                            </div>
                                        </div>
                                        <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>AJR</td>
                                    <td>125</td>
                                    <td class="bluebackground">100%</td>
                                    <td>500</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>
                                        <div class="dropdown open">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="triggerId" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Action</button>
                                            </div>
                                        </div>
                                        <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>AJR</td>
                                    <td>125</td>
                                    <td class="bluebackground">100%</td>
                                    <td>500</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>
                                        <div class="dropdown open">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="triggerId" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Action</button>
                                            </div>
                                        </div>
                                        <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>AJR</td>
                                    <td>125</td>
                                    <td class="bluebackground">100%</td>
                                    <td>500</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>
                                        <div class="dropdown open">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="triggerId" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Action</button>
                                            </div>
                                        </div>
                                        <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>AJR</td>
                                    <td>125</td>
                                    <td class="bluebackground">100%</td>
                                    <td>500</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>50</td>
                                    <td class="bluebackground">17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>
                                        <div class="dropdown open">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="triggerId" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Action</button>
                                            </div>
                                        </div>
                                        <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <h2 class="boxHeading">Total Current Performance To Date</h2>
            <div class="boxData">
                <div class="container-fluid">
                    <div class="row">
                        <div class="box">
                            <table class="table table-responsive table-borderless">
                                <tbody>
                                    <tr>
                                        <td class="heading">Targets :</td>
                                        <td colspan="2" class="heading">5000</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">Targets :</td>
                                        <td class="heading">5000</td>
                                        <td class="heading">5000</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">Targets :</td>
                                        <td>5000</td>
                                        <td>5000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="box">
                            <table class="table table-responsive table-borderless">
                                <tbody>
                                    <tr>
                                        <td class="heading">Targets :</td>
                                        <td colspan="2" class="heading">5000</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">Targets :</td>
                                        <td class="heading">5000</td>
                                        <td class="heading">5000</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">Targets :</td>
                                        <td>5000</td>
                                        <td>5000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="box">
                            <table class="table table-responsive table-borderless">
                                <tbody>
                                    <tr>
                                        <td class="heading">Targets :</td>
                                        <td colspan="2" class="heading">5000</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">Targets :</td>
                                        <td class="heading">5000</td>
                                        <td class="heading">5000</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">Targets :</td>
                                        <td>5000</td>
                                        <td>5000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="box">
                            <table class="table table-responsive table-borderless">
                                <tbody>
                                    <tr>
                                        <td class="heading">Targets :</td>
                                        <td colspan="2" class="heading">5000</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">Targets :</td>
                                        <td class="heading">5000</td>
                                        <td class="heading">5000</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">Targets :</td>
                                        <td>5000</td>
                                        <td>5000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="weekly" role="tabpanel" aria-labelledby="weekly-tab">
            profile
        </div>
        <div class="tab-pane" id="monthly" role="tabpanel">
            Monthly
        </div>
        <div class="tab-pane" id="settings" role="tabpanel">
            Settings
        </div>
        <div class="tab-pane link" id="link" role="tabpanel">
            <h2>Create Link</h2>
            <div class="formDiv">
                <form action="">
                    <div class="row mainRow">
                        <div class="col-1 label">
                            <label for="name" class="form-label" aria-required="true">Name</label>
                        </div>
                        <div class="col input">
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mainRow">
                        <div class="col">
                            <div class="row">
                                <div class="col-2 label">
                                    <label for="email" class="form-label" aria-required="true">Email</label>
                                </div>
                                <div class="col input">
                                    <input type="email" name="email" id="email" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-2 label">
                                    <label for="phone" class="form-label" aria-required="true">Phone
                                        No.</label>
                                </div>
                                <div class="col input">
                                    <input type="tel" name="phone" id="phone" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Changes</button>
                </form>
            </div>
        </div>
    </div>
@endsection
