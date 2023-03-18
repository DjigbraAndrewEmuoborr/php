@extends('layouts.app')

@section('title','Trade')

@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-3 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Buy </h4>
                    </div>
                    <div class="card-body">
                        <form method="post" name="myform" class="currency_validate trade-form row g-3">
                            <div class="col-12">
                                <label class="form-label">Send</label>
                                <div class="input-group">
                                    <select class="form-control" name="method">
                                        <option value="bank">USD</option>
                                        <option value="master">Euro</option>
                                    </select>
                                    <input type="text" name="currency_amount" class="form-control"
                                        placeholder="0.0214 BTC">
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Receive</label>
                                <div class="input-group">
                                    <select class="form-control" name="method">
                                        <option value="bank">BTC</option>
                                        <option value="master">ETH</option>
                                    </select>
                                    <input type="text" name="currency_amount" class="form-control"
                                        placeholder="0.0214 BTC">
                                </div>
                            </div>

                            <p class="mb-0">1 USD ~ 0.000088 BTC <a href="#">Expected rate <br>No extra
                                    fees</a></p>

                            <!-- <button type="submit" name="submit" class="btn btn-success btn-block">Exchange
                                    Now</button> -->
                            <button type="button" class="btn btn-success btn-block" data-toggle="modal"
                                data-target="#BuyModal">
                                Buy Now
                            </button>

                        </form>

                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sell </h4>
                    </div>
                    <div class="card-body">
                        <form method="post" name="myform" class="currency_validate trade-form row g-3">
                            <div class="col-12">
                                <label class="form-label">Send</label>
                                <div class="input-group">
                                    <select class="form-control" name="method">
                                        <option value="bank">USD</option>
                                        <option value="master">Euro</option>
                                    </select>
                                    <input type="text" name="currency_amount" class="form-control"
                                        placeholder="0.0214 BTC">
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Receive</label>
                                <div class="input-group">
                                    <select class="form-control" name="method">
                                        <option value="bank">BTC</option>
                                        <option value="master">ETH</option>
                                    </select>
                                    <input type="text" name="currency_amount" class="form-control"
                                        placeholder="0.0214 BTC">
                                </div>
                            </div>

                            <p class="mb-0">1 USD ~ 0.000088 BTC <a href="#">Expected rate <br>No extra
                                    fees</a></p>

                            <button type="button" class="btn btn-danger btn-block" data-toggle="modal"
                                data-target="#SellModal">
                                Sell Now
                            </button>

                        </form>

                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Transfer </h4>
                    </div>
                    <div class="card-body">
                        <form name="myform" class="currency_validate trade-form row g-3">
                            <div class="col-12">
                                <label class="form-label">Send</label>
                                <div class="input-group">
                                    <select class="form-control" name="method">
                                        <option value="bank">USD</option>
                                        <option value="master">Euro</option>
                                    </select>
                                    <input type="text" name="currency_amount" class="form-control"
                                        placeholder="0.0214 BTC">
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Receive</label>
                                <div class="input-group">
                                    <select class="form-control" name="method">
                                        <option value="bank">BTC</option>
                                        <option value="master">ETH</option>
                                    </select>
                                    <input type="text" name="currency_amount" class="form-control"
                                        placeholder="0.0214 BTC">
                                </div>
                            </div>

                            <p class="mb-0">1 USD ~ 0.000088 BTC <a href="#">Expected rate <br>No extra
                                    fees</a></p>

                            <button type="button" class="btn btn-info btn-block" data-toggle="modal"
                                data-target="#transferModal">Transfer
                                Now</button>

                        </form>

                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Convert </h4>
                    </div>
                    <div class="card-body">
                        <form method="post" name="myform" class="currency_validate trade-form row g-3">
                            <div class="col-12">
                                <label class="form-label">From</label>
                                <div class="input-group">
                                    <select class="form-control" name="method">
                                        <option value="bank">USD</option>
                                        <option value="master">Euro</option>
                                    </select>
                                    <input type="text" name="currency_amount" class="form-control"
                                        placeholder="0.0214 BTC">
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">To</label>
                                <div class="input-group">
                                    <select class="form-control" name="method">
                                        <option value="bank">BTC</option>
                                        <option value="master">ETH</option>
                                    </select>
                                    <input type="text" name="currency_amount" class="form-control"
                                        placeholder="0.0214 BTC">
                                </div>
                            </div>

                            <p class="mb-0">1 USD ~ 0.000088 BTC <a href="#">Expected rate <br>No extra
                                    fees</a></p>

                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                                data-target="#convertModal">Convert
                                Now</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Buy Transaction</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped responsive-table">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Coin Name</th>
                                        <th>Wallet</th>
                                        <th>Amount</th>
                                        <th>Balance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="danger-arrow"><i class="bi bi-arrow-down-short"></i>
                                                Sold</span>
                                        </td>
                                        <td class="coin-name">
                                            <i class="cc BTC"></i> Bitcoin
                                        </td>
                                        <td>
                                            Using - Bank *******5264
                                        </td>
                                        <td class="text-danger">-0.000242 BTC</td>
                                        <td>-0.125 USD</td>
                                    </tr>
                                    <tr>
                                        <td><span class="success-arrow"><i class="bi bi-arrow-up-short"></i>
                                                Buy</span>
                                        </td>
                                        <td class="coin-name">
                                            <i class="cc LTC"></i> Litecoin
                                        </td>
                                        <td>
                                            Using - Card *******8475
                                        </td>
                                        <td class="text-success">-0.000242 BTC</td>
                                        <td>-0.125 USD</td>
                                    </tr>
                                    <tr>
                                        <td><span class="danger-arrow"><i class="bi bi-arrow-down-short"></i>
                                                Sold</span>
                                        </td>
                                        <td class="coin-name">
                                            <i class="cc XRP"></i> Ripple
                                        </td>
                                        <td>
                                            Using - Card *******8475
                                        </td>
                                        <td class="text-danger">-0.000242 BTC</td>
                                        <td>-0.125 USD</td>
                                    </tr>
                                    <tr>
                                        <td><span class="success-arrow"><i class="bi bi-arrow-up-short"></i>
                                                Buy</span>
                                        </td>
                                        <td class="coin-name">
                                            <i class="cc DASH"></i> Dash
                                        </td>
                                        <td>
                                            Using - Card *******2321
                                        </td>
                                        <td class="text-success">-0.000242 BTC</td>
                                        <td>-0.125 USD</td>
                                    </tr>
                                    <tr>
                                        <td><span class="danger-arrow"><i class="bi bi-arrow-down-short"></i>
                                                Sold</span>
                                        </td>
                                        <td class="coin-name">
                                            <i class="cc BTC"></i> Bitcoin
                                        </td>
                                        <td>
                                            Using - Card *******2321
                                        </td>
                                        <td class="text-danger">-0.000242 BTC</td>
                                        <td>-0.125 USD</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sell Transaction</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped responsive-table">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Coin Name</th>
                                        <th>Wallet</th>
                                        <th>Amount</th>
                                        <th>Balance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="danger-arrow"><i class="bi bi-arrow-down-short"></i>
                                                Sold</span>
                                        </td>
                                        <td class="coin-name">
                                            <i class="cc BTC"></i> Bitcoin
                                        </td>
                                        <td>
                                            Using - Bank *******5264
                                        </td>
                                        <td class="text-danger">-0.000242 BTC</td>
                                        <td>-0.125 USD</td>
                                    </tr>
                                    <tr>
                                        <td><span class="success-arrow"><i class="bi bi-arrow-up-short"></i>
                                                Buy</span>
                                        </td>
                                        <td class="coin-name">
                                            <i class="cc LTC"></i> Litecoin
                                        </td>
                                        <td>
                                            Using - Card *******8475
                                        </td>
                                        <td class="text-success">-0.000242 BTC</td>
                                        <td>-0.125 USD</td>
                                    </tr>
                                    <tr>
                                        <td><span class="danger-arrow"><i class="bi bi-arrow-down-short"></i>
                                                Sold</span>
                                        </td>
                                        <td class="coin-name">
                                            <i class="cc XRP"></i> Ripple
                                        </td>
                                        <td>
                                            Using - Card *******8475
                                        </td>
                                        <td class="text-danger">-0.000242 BTC</td>
                                        <td>-0.125 USD</td>
                                    </tr>
                                    <tr>
                                        <td><span class="success-arrow"><i class="bi bi-arrow-up-short"></i>
                                                Buy</span>
                                        </td>
                                        <td class="coin-name">
                                            <i class="cc DASH"></i> Dash
                                        </td>
                                        <td>
                                            Using - Card *******2321
                                        </td>
                                        <td class="text-success">-0.000242 BTC</td>
                                        <td>-0.125 USD</td>
                                    </tr>
                                    <tr>
                                        <td><span class="danger-arrow"><i class="bi bi-arrow-down-short"></i>
                                                Sold</span>
                                        </td>
                                        <td class="coin-name">
                                            <i class="cc BTC"></i> Bitcoin
                                        </td>
                                        <td>
                                            Using - Card *******2321
                                        </td>
                                        <td class="text-danger">-0.000242 BTC</td>
                                        <td>-0.125 USD</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Transfer Transaction</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped responsive-table">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Coin Name</th>
                                        <th>Wallet</th>
                                        <th>Amount</th>
                                        <th>Balance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="danger-arrow"><i class="bi bi-arrow-down-short"></i>
                                                Sold</span>
                                        </td>
                                        <td class="coin-name">
                                            <i class="cc BTC"></i> Bitcoin
                                        </td>
                                        <td>
                                            Using - Bank *******5264
                                        </td>
                                        <td class="text-danger">-0.000242 BTC</td>
                                        <td>-0.125 USD</td>
                                    </tr>
                                    <tr>
                                        <td><span class="success-arrow"><i class="bi bi-arrow-up-short"></i>
                                                Buy</span>
                                        </td>
                                        <td class="coin-name">
                                            <i class="cc LTC"></i> Litecoin
                                        </td>
                                        <td>
                                            Using - Card *******8475
                                        </td>
                                        <td class="text-success">-0.000242 BTC</td>
                                        <td>-0.125 USD</td>
                                    </tr>
                                    <tr>
                                        <td><span class="danger-arrow"><i class="bi bi-arrow-down-short"></i>
                                                Sold</span>
                                        </td>
                                        <td class="coin-name">
                                            <i class="cc XRP"></i> Ripple
                                        </td>
                                        <td>
                                            Using - Card *******8475
                                        </td>
                                        <td class="text-danger">-0.000242 BTC</td>
                                        <td>-0.125 USD</td>
                                    </tr>
                                    <tr>
                                        <td><span class="success-arrow"><i class="bi bi-arrow-up-short"></i>
                                                Buy</span>
                                        </td>
                                        <td class="coin-name">
                                            <i class="cc DASH"></i> Dash
                                        </td>
                                        <td>
                                            Using - Card *******2321
                                        </td>
                                        <td class="text-success">-0.000242 BTC</td>
                                        <td>-0.125 USD</td>
                                    </tr>
                                    <tr>
                                        <td><span class="danger-arrow"><i class="bi bi-arrow-down-short"></i>
                                                Sold</span>
                                        </td>
                                        <td class="coin-name">
                                            <i class="cc BTC"></i> Bitcoin
                                        </td>
                                        <td>
                                            Using - Card *******2321
                                        </td>
                                        <td class="text-danger">-0.000242 BTC</td>
                                        <td>-0.125 USD</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Convert Transaction</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped responsive-table">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Coin Name</th>
                                        <th>Wallet</th>
                                        <th>Amount</th>
                                        <th>Balance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="danger-arrow"><i class="bi bi-arrow-down-short"></i>
                                                Sold</span>
                                        </td>
                                        <td class="coin-name">
                                            <i class="cc BTC"></i> Bitcoin
                                        </td>
                                        <td>
                                            Using - Bank *******5264
                                        </td>
                                        <td class="text-danger">-0.000242 BTC</td>
                                        <td>-0.125 USD</td>
                                    </tr>
                                    <tr>
                                        <td><span class="success-arrow"><i class="bi bi-arrow-up-short"></i>
                                                Buy</span>
                                        </td>
                                        <td class="coin-name">
                                            <i class="cc LTC"></i> Litecoin
                                        </td>
                                        <td>
                                            Using - Card *******8475
                                        </td>
                                        <td class="text-success">-0.000242 BTC</td>
                                        <td>-0.125 USD</td>
                                    </tr>
                                    <tr>
                                        <td><span class="danger-arrow"><i class="bi bi-arrow-down-short"></i>
                                                Sold</span>
                                        </td>
                                        <td class="coin-name">
                                            <i class="cc XRP"></i> Ripple
                                        </td>
                                        <td>
                                            Using - Card *******8475
                                        </td>
                                        <td class="text-danger">-0.000242 BTC</td>
                                        <td>-0.125 USD</td>
                                    </tr>
                                    <tr>
                                        <td><span class="success-arrow"><i class="bi bi-arrow-up-short"></i>
                                                Buy</span>
                                        </td>
                                        <td class="coin-name">
                                            <i class="cc DASH"></i> Dash
                                        </td>
                                        <td>
                                            Using - Card *******2321
                                        </td>
                                        <td class="text-success">-0.000242 BTC</td>
                                        <td>-0.125 USD</td>
                                    </tr>
                                    <tr>
                                        <td><span class="danger-arrow"><i class="bi bi-arrow-down-short"></i>
                                                Sold</span>
                                        </td>
                                        <td class="coin-name">
                                            <i class="cc BTC"></i> Bitcoin
                                        </td>
                                        <td>
                                            Using - Card *******2321
                                        </td>
                                        <td class="text-danger">-0.000242 BTC</td>
                                        <td>-0.125 USD</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection