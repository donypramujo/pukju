#counting bus perdate
SELECT bus_type_id,bus_order_count,from_date,to_date FROM dojo_pukju_booking_order_buses bob
left join dojo_pukju_booking_orders bo
on bob.booking_order_id=bo.id
where from_date <= '2019-1-25' and to_date >= '2019-1-24'


SELECT bus_type_id,sum(bus_order_count) as total_bus FROM dojo_pukju_booking_order_buses bob
left join dojo_pukju_booking_orders bo
on bob.booking_order_id=bo.id
where from_date <= '2019-1-25' and to_date >= '2019-1-24'
group by bus_type_id

SELECT bob.bus_type_id,sum(bus_order_count) as used_bus,b.total_bus,(total_bus-sum(bus_order_count)) as left_bus FROM dojo_pukju_booking_order_buses bob
left join dojo_pukju_booking_orders bo
on bob.booking_order_id=bo.id
left join (
    SELECT 
         b.bus_type_id, 
         count(1) as total_bus 
      FROM  dojo_pukju_buses b 
      GROUP BY b.bus_type_id 
) b
on b.bus_type_id = bob.bus_type_id
where from_date <= '2019-1-30' and to_date >= '2019-1-24'
group by bob.bus_type_id

SELECT bob.bus_type_id,bt.name,sum(bus_order_count) as used_bus,b.total_bus,(total_bus-sum(bus_order_count)) as left_bus 
FROM dojo_pukju_booking_order_buses bob
left join dojo_pukju_booking_orders bo
on bob.booking_order_id=bo.id
left join (
    SELECT 
         b.bus_type_id, 
         count(1) as total_bus 
      FROM  dojo_pukju_buses b 
      GROUP BY b.bus_type_id 
) b
on b.bus_type_id = bob.bus_type_id
left join dojo_pukju_bus_types bt
on bob.bus_type_id = bt.id
where from_date <= '2019-1-25' and to_date >= '2019-1-24'
group by bob.bus_type_id


select  vb.name,vb.bus_count,ifNUll(used_bus,0) as used_bus,ifNUll((bus_count-used_bus),0 )as left_bus
FROM dojo_pukju_views_buses vb
left join
(SELECT bus_type_id,sum(bus_order_count) as used_bus,bus_order_count,from_date,to_date FROM dojo_pukju_booking_order_buses bob
left join dojo_pukju_booking_orders bo
on bob.booking_order_id=bo.id 
where from_date <= '2019-1-26' and to_date >= '2019-1-24'
group by bus_type_id
) bob
on vb.id = bob.bus_type_id
