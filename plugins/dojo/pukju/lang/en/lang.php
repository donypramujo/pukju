<?php return [
    'plugin' => [
        'name' => 'Putra KJU',
        'description' => 'Putra KJU',
    ],
    'format' =>[
        'date' => 'j M Y'
    ],
    'master' => [
        'tab' => 'Master Data',
        'access_drivers' => 'Manage the drivers',
        'access_bus_types' => 'Manage the bus types',
        'access_customers' => 'Manage the customers',
        'access_buses' => 'Manage the buses',
        'access_destinations' => 'Manage the destinations',
        'access_booking_orders' => 'Manage the booking orders',
        'access_travel_assignments' => 'Manage the travel assignments',
        'access_driver_balance_types' => 'Manage the driver balance types',
    ],
    'driver' => [
        'birth_of_date' => 'Birth of Date',
        'name' => 'Driver Name',
        'email' => 'Email',
        'phone_number' => 'Phone Number',
        'id' => 'Driver Id',
        'plural' => 'Drivers',
        'singular' => 'Driver',
        'address' => 'Address',
        'balances' => 'Driver Balances',
        'record_finder' => 'Click the %s button to find a driver',
    ],
    'bus_type' => [
        'id' => 'Bus Type Id',
        'name' => 'Bus Type Name',
        'singular' => 'Bus Type',
        'count' => 'Count Bus',
        'plural' => 'Bus Types',
        'qty' => 'Quantity',
        'record_finder' => 'Click the %s button to find a bus type',
    ],
    'customer' => [
        'singular' => 'Customer',
        'plural' => 'Customers',
        'name' => 'Customer Name',
        'id' => 'Customer Id',
        'phone_number' => 'Phone Number',
        'birth_of_date' => 'Birth of Date',
        'address' => 'Address',
        'email' => 'Email',
        'record_finder' => 'Click the %s button to find a customer',
    ],
    'bus' => [
        'singular' => 'Bus',
        'plural' => 'Buses',
        'police_number' => 'Police Number',
        'code' => 'Bus Code',
        'ordered' => 'Ordered Buses',
        'record_finder' => 'Click the %s button to find a bus',
        'price' => 'Price',
        'total_price' => 'Total Price',
    ],
    'destination' => [
        'plural' => 'Destinations',
        'singular' => 'Destination',
        'id' => 'Destination Id',
        'name' => 'Destination Name',
        'record_finder' => 'Click the %s button to find a destination',
    ],
    'bo' => [
        'singular' => 'Booking Order',
        'plural' => 'Booking Orders',
        'id' => 'Booking Order Id',
        'from_date' => 'From Date',
        'to_date' => 'To Date',
        'event_name' => 'Event Name',
        'basic_info' =>'Basic Info',
        'pickup_info' => 'Pickup Info',
        'date' => 'Date'
    ],
    'loa' => [
    ],
    'transaction' => [
        'singular' => 'Transaction',
    ],
    'pickup' => [
        'hour' => 'Pickup Hour',
        'phone_number' => 'Pickup Phone Number',
        'address' => 'Pickup Address',
    ],
    'charge' => [
        'singular' => 'Charge',
        'plural' => 'Charges',
        'per_bus' => 'Charges Per Bus',
        'description' => 'Description',
        'amount' => 'Amount',
    ],
    'ta' => [
        'plural' => 'Travel Assignments',
        'id' => 'Id'
    ],
    'trx' => [
        'tab' => 'Transaction',
    ],
    'driver_balance_type' => [
        'id' => 'Driver Balance Type Id',
        'description' => 'Description',
        'type' => 'Type',
    ],
];