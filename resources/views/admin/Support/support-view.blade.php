@extends('admin.master')
@section('content')
<div class="admin-content-area">
    <div class="live-chat-section">
        <div class="section-header d-flex align-items-center">
            <h2 class="mb-0">Support</h2>
            @include('admin.Common.admin-profile-menu')
        </div>
        <div class="live-chat-inner">
            <div class="live-chat-content">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 w-100 right-user-chat">
                        <div class="section-block-title mb-4 d-flex align-items-center justify-content-between">
                            <h3 class="mb-0">View</h3>
                            <div class="right-status-drp">
                                <select class="form-control nice-select">
                                    <option>Completed</option>
                                    <option>Pending</option>
                                    <option>InProgress</option>
                                </select>
                            </div>
                        </div>
                        <div class="user-chat-inner chatreplaymodal support-chat-repaly-content">
                            <div class="chatreplay-content">
                                <div class="chat-top-header d-flex align-items-center">
                                    <div class="left-user-image">
                                        <img src="{{asset('assets_admin/images/table-user-image.png')}}" alt="user">
                                    </div>
                                    <div class="user-title-right">
                                        <h2>Aren Pendrom</h2>
                                    </div>
                                </div>
                                <div class="chart-middle-content">
                                    <div class="chart-right-content chart-content-inner">
                                        <div class="chart-message">
                                            <p>Hello, i’m carrel from Budapest .</p>
                                        </div>
                                        <div class="right-chart-date">3.01pm</div>
                                    </div>
                                    <div class="chart-left-content chart-content-inner">
                                        <div class="user-image-content d-flex align-items-center">
                                            <div class="user-image">
                                                <img src="{{asset('assets_admin/images/table-user-image.png')}}" alt="user">
                                            </div>
                                            <div class="user-chat-content">
                                                <div class="chart-message">
                                                    <p>Hello, How can i assist you ?</p>
                                                </div>
                                                <div class="left-chart-date">3.01pm</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chart-right-content chart-content-inner">
                                        <div class="chart-message">
                                            <p>would you please check my travel details which i filed two days before.</p>
                                        </div>
                                        <div class="right-chart-date">3.01pm</div>
                                    </div>
                                    <div class="chart-left-content chart-content-inner">
                                        <div class="user-image-content d-flex align-items-center">
                                            <div class="user-image">
                                                <img src="{{asset('assets_admin/images/table-user-image.png')}}" alt="user">
                                            </div>
                                            <div class="user-chat-content">
                                                <div class="chart-message">
                                                    <p>Okay I'll check and inform you. </p>
                                                </div>
                                                <div class="left-chart-date">3.01pm</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chart-right-content chart-content-inner">
                                        <div class="chart-message">
                                            <p>I have faced some of the issues in filling the details time and that not showing in my details page.</p>
                                        </div>
                                        <div class="right-chart-date">3.01pm</div>
                                    </div>
                                    <div class="chart-left-content chart-content-inner">
                                        <div class="user-image-content d-flex align-items-center">
                                            <div class="user-image">
                                                <img src="{{asset('assets_admin/images/table-user-image.png')}}" alt="user">
                                            </div>
                                            <div class="user-chat-content">
                                                <div class="chart-message">
                                                    <p>we will check out our database and let see what's the issue is there.</p>
                                                </div>
                                                <div class="left-chart-date">3.01pm</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chart-bottom-content">
                                    <form>
                                        <div class="form-groud-data position-relative">
                                            <button class="chat-upload-btn" type="button"><i class="fa fa-plus"></i></button>
                                            <input type="text" class="form-control" placeholder="Say something..." required="">
                                            <button type="submit" class="chat-submit-btn"><i class="fa-solid fa-chevron-right"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('jscontent')
<script>
    $(".nice-select").niceSelect();
</script>
@endsection
