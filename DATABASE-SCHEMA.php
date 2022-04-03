///////////////////////////////////////////////
///////////////////////////////////////////////
- TyreModels (ex: Michelin, Continental)
    ->id
    ->name 

- TyreTypes (ex: letni, zimni)
    ->id
    ->name

- TyreSizes (ex: 195 65 15)
    ->id
    ->value
///////////////////////////////////////////////
//////////////////////////////////////////////
Customers     =====> Created Customer model, migration and resource controller
    ->id
    ->name 
    ->date_of_birth(for a person) / EDB(for a company)
    ->adress
    ->city
    ->country
    ->email_address
    ->phone_number

Products (combination of model,type and size) =====> Created Product model, migration and resource controller
    ->id
    ->model
    ->type 
    ->size
    ->year (the year when the tyre was manufactured)
    ->description
    ->quantity
    ->purchase_price
    ->sale_price

Sales =======>database was seeded with faker values
    ->id
    ->customer_id
    ->product_id
    ->quantity 
    ->total_price (quantity * unit_price)
    ->payment_due
    ->is_paid(boolean value = true or false)

Payments =======>database was seeded with faker values
    ->id
    ->sale_id
    ->description
    ->amount


    ////////////////////////////////////
    ////RELATIONSHIPS BETWEEN MODELS////
    ////////////////////////////////////

    Customer model is related to the Sale model with a hasMany relationship.
    Product model is related to the Sale model with a hasMany relationship. The
    Sale model is related to the Customer and Product model wit belongsTo relationship.

    Payment model --> belongsTo <-- Sale model relationship.
    Sale model --> hasMany <-- Payment model relationship.

    Customer model hasManyThrough relationship with Payment::model