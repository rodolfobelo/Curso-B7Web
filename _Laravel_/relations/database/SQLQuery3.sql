SELECT 
	*
FROM [Relations].[dbo].[invoices]
inner join addresses
        on addresses.id = invoices.address_id



SELECT 
	*
FROM [Relations].[dbo].[addresses]
inner join users
        on users.id = addresses.users_id


SELECT
	*
FROM [Relations].[dbo].[users]