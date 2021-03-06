@extends('layouts.admin')

@section('title')
    Store Dashboard 
@endsection

@section('content')
    <!-- Section Content -->
          <div class="section-content section-dashboard-home" data-aos="fluid">
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Admin Dashboard</h2>
                <p class="dashboard-subtitle">This is Administration Panel</p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Customer
                        </div>
                        <div class="dashboard-card-subtitle">
                          {{ $customer }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Revenue
                        </div>
                        <div class="dashboard-card-subtitle">
                          Rp. {{ $revenue }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Transaction
                        </div>
                        <div class="dashboard-card-subtitle">
                          {{ $transaction }}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- <div class="row mt-3">
                  <div class="col-12 mt-2">
                    <h5 class="mb-3">Recent Transactions</h5>
                    <a
                      href="/dashboard-transactions-details.html"
                      class="card card-list d-block"
                    >
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img
                              src="/images/dashboard-icon-product-1.png"
                              alt=""
                            />
                          </div>
                          <div class="col-md-4">Shirup Setrup</div>
                          <div class="col-md-3">Didin Setiawan</div>
                          <div class="col-md-3">30 Desember 2021</div>
                          <div class="col md-1 d-none d-md-block">
                            <img
                              src="/images/dashboard-arrow-right.svg"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                    </a>
                    <a
                      href="/dashboard-transactions-details.html"
                      class="card card-list d-block"
                    >
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img
                              src="/images/dashboard-icon-product-2.png"
                              alt=""
                            />
                          </div>
                          <div class="col-md-4">LeBrone X</div>
                          <div class="col-md-3">Ahsanal Kalam</div>
                          <div class="col-md-3">30 Desember 2021</div>
                          <div class="col md-1 d-none d-md-block">
                            <img
                              src="/images/dashboard-arrow-right.svg"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                    </a>
                    <a
                      href="/dashboard-transactions-details.html"
                      class="card card-list d-block"
                    >
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img
                              src="/images/dashboard-icon-product-3.png"
                              alt=""
                            />
                          </div>
                          <div class="col-md-4">Soffa Lembutte</div>
                          <div class="col-md-3">Maya Yoshida</div>
                          <div class="col-md-3">30 Desember 2021</div>
                          <div class="col md-1 d-none d-md-block">
                            <img
                              src="/images/dashboard-arrow-right.svg"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div> --}}
              </div>
            </div>
          </div>
@endsection