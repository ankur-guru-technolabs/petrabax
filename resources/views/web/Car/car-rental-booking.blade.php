@extends('web.master')
@section('content') 
<div class="daytrips-booked-section car-rental-booked-section">
    <div class="container">
        <div class="daytrips-booked-details">
            <h3>Booking Details</h3>
            <form>
                <div class="booking-details">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="row">
                                <div class="col-md-6 col-6 form-group mb-3">
                                    <label>Driver First Name</label>
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-md-6 col-6 form-group mb-3">
                                    <label>Driver Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="row">
                                <div class="col-lg-2 col-6 small-form-fieild form-group mb-3">
                                    <label>Driver age</label>
                                    <select class="custom-nice-select form-control">
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                        <option>31</option>
                                        <option>32</option>
                                        <option>33</option>
                                        <option>34</option>
                                        <option>35</option>
                                        <option>36</option>
                                        <option>37</option>
                                        <option>38</option>
                                        <option>39</option>
                                        <option>40</option>
                                        <option>41</option>
                                        <option>42</option>
                                        <option>43</option>
                                        <option>44</option>
                                        <option>45</option>
                                        <option>46</option>
                                        <option>47</option>
                                        <option>48</option>
                                        <option>49</option>
                                        <option>50</option>
                                        <option>51</option>
                                        <option>51</option>
                                        <option>53</option>
                                        <option>54</option>
                                        <option>55</option>
                                        <option>56</option>
                                        <option>57</option>
                                        <option>58</option>
                                        <option>59</option>
                                        <option>60</option>
                                        <option>61</option>
                                        <option>62</option>
                                        <option>63</option>
                                        <option>64</option>
                                        <option>65</option>
                                        <option>66</option>
                                        <option>67</option>
                                        <option>68</option>
                                        <option>69</option>
                                        <option>70</option>
                                        <option>71</option>
                                        <option>72</option>
                                        <option>73</option>
                                        <option>74</option>
                                        <option>75</option>
                                        <option>76</option>
                                        <option>77</option>
                                        <option>78</option>
                                        <option>79</option>
                                        <option>80</option>
                                        <option>81</option>
                                        <option>81</option>
                                        <option>83</option>
                                        <option>84</option>
                                        <option>85</option>
                                        <option>86</option>
                                        <option>87</option>
                                        <option>88</option>
                                        <option>89</option>
                                        <option>90</option>
                                        <option>91</option>
                                        <option>92</option>
                                        <option>93</option>
                                        <option>94</option>
                                        <option>95</option>
                                        <option>96</option>
                                        <option>97</option>
                                        <option>98</option>
                                        <option>99</option>
                                        <option>100</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 col-6 small-form-fieild form-group mb-3">
                                    <label>Infant seat</label>
                                    <select class="custom-nice-select form-control">
                                        <option>No</option>
                                        <option>Yes</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 col-6 small-form-fieild form-group mb-3">
                                    <label>Child seat</label>
                                    <select class="custom-nice-select form-control">
                                        <option>No</option>
                                        <option>Yes</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 col-6 small-form-fieild form-group mb-3">
                                    <label>Booster seat</label>
                                    <select class="custom-nice-select form-control">
                                        <option>No</option>
                                        <option>Yes</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 col-6 small-form-fieild form-group mb-3">
                                    <label>GPS</label>
                                    <select class="custom-nice-select form-control">
                                        <option>No</option>
                                        <option>Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="booking-other-information">
                    <p><span>Infant Seat: </span>Children 0-12 months</p>
                    <p><span>Child Seat: </span>Children 1-3 years</p>
                    <p><span>Booster Seat: </span>Children 4-7 years</p>
                    <p>Rates for optional equipment such as racks and child seats are calculated and paid locally at time of pick-up. Please note that all the additional options are on request and have to be confirmed.</p>
                </div>
                <div class="form-submit-btn text-center">
                    <a href="{{route('carRentalBookingCart')}}" class="add-cart-btn">Add to cart</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('jscontent')
<script type="text/javascript">
    if($(".custom-nice-select").length) {
      $(".custom-nice-select").niceSelect();
    }
</script>
@endsection