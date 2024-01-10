@extends('web.master')
@section('content') 
<div class="site-main-content">
    <div class="review-section">
        <div class="container">
            <div class="review-inner">
                <div class="section-header">
                    <h2>Detailed Review Form</h2>
                </div>
                <form>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label class="d-block">Hotel Experience</label>

                            <div class="star-review-user">
                                <input id="hotel-rating-5" type="radio" name="hotelrating" value="5" />
                                <label for="hotel-rating-5" title="5 stars">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="hotel-rating-4" type="radio" name="hotelrating" value="4" />
                                <label for="hotel-rating-4" title="4 stars">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="hotel-rating-3" type="radio" name="hotelrating" value="3" />
                                <label for="hotel-rating-3" title="3 stars">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="hotel-rating-2" type="radio" name="hotelrating" value="2" />
                                <label for="hotel-rating-2" title="2 stars">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="hotel-rating-1" type="radio" name="hotelrating" value="1" />
                                <label for="hotel-rating-1" title="1 star">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label class="d-block">Cleanliness</label>
                            <div class="star-review-user">
                                <input id="cleanliness-rating-5" type="radio" name="cleanlinessrating" value="5" />
                                <label for="cleanliness-rating-5" title="5 stars">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="cleanliness-rating-4" type="radio" name="cleanlinessrating" value="4" />
                                <label for="cleanliness-rating-4" title="4 stars">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="cleanliness-rating-3" type="radio" name="cleanlinessrating" value="3" />
                                <label for="cleanliness-rating-3" title="3 stars">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="cleanliness-rating-2" type="radio" name="cleanlinessrating" value="2" />
                                <label for="cleanliness-rating-2" title="2 stars">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="cleanliness-rating-1" type="radio" name="cleanlinessrating" value="1" />
                                <label for="cleanliness-rating-1" title="1 star">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label class="d-block">Amenities</label>
                            <div class="star-review-user">
                                <input id="amenities-rating-5" type="radio" name="amenitiesrating" value="5" />
                                <label for="amenities-rating-5" title="5 stars">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="amenities-rating-4" type="radio" name="amenitiesrating" value="4" />
                                <label for="amenities-rating-4" title="4 stars">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="amenities-rating-3" type="radio" name="amenitiesrating" value="3" />
                                <label for="amenities-rating-3" title="3 stars">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="amenities-rating-2" type="radio" name="amenitiesrating" value="2" />
                                <label for="amenities-rating-2" title="2 stars">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="amenities-rating-1" type="radio" name="amenitiesrating" value="1" />
                                <label for="amenities-rating-1" title="1 star">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label class="d-block">Location</label>
                            <div class="star-review-user">
                                <input id="location-rating-5" type="radio" name="locationrating" value="5" />
                                <label for="location-rating-5" title="5 stars">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="location-rating-4" type="radio" name="locationrating" value="4" />
                                <label for="location-rating-4" title="4 stars">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="location-rating-3" type="radio" name="locationrating" value="3" />
                                <label for="location-rating-3" title="3 stars">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="location-rating-2" type="radio" name="locationrating" value="2" />
                                <label for="location-rating-2" title="2 stars">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="location-rating-1" type="radio" name="locationrating" value="1" />
                                <label for="location-rating-1" title="1 star">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label class="d-block">Staff Behaviour</label>
                            <div class="star-review-user">
                                <input id="staff-rating-5" type="radio" name="staffrating" value="5" />
                                <label for="staff-rating-5" title="5 stars">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="staff-rating-4" type="radio" name="staffrating" value="4" />
                                <label for="staff-rating-4" title="4 stars">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="staff-rating-3" type="radio" name="staffrating" value="3" />
                                <label for="staff-rating-3" title="3 stars">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="staff-rating-2" type="radio" name="staffrating" value="2" />
                                <label for="staff-rating-2" title="2 stars">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="staff-rating-1" type="radio" name="staffrating" value="1" />
                                <label for="staff-rating-1" title="1 star">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                            </div>
                        </div>


                        <div class="col-sm-6 form-group">
                            <label>Remark (Optional)</label>
                            <input type="text" class="form-control" required>
                        </div>

                        <div class="col-12 form-group">
                            <label>Review</label>
                            <textarea class="form-control" rows="3" placeholder="Write a review" required></textarea>
                        </div>

                        <div class="col-12 text-center form-submit-btn">
                            <button type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
@endsection