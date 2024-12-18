select * from teste

SELECT 
	description,
    value,
    name,
    email,
    address
FROM [Relations].[dbo].[invoices]
inner join addresses
        on addresses.id = invoices.address_id
inner join users
        on users.id = addresses.users_id



SELECT 
	*
FROM [Relations].[dbo].[addresses]
inner join users
        on users.id = addresses.users_id


SELECT
	*
FROM [Relations].[dbo].[users]