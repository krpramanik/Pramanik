<?php
namespace Webkul\Customer\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Customer\Contracts\CustomerAddress as CustomerAddressContract;

class CustomerAddress extends Model implements CustomerAddressContract
{
    protected $table = 'customer_addresses';

    protected $fillable = ['customer_id' ,'address1', 'country', 'state', 'city', 'postcode', 'phone', 'default_address', 'first_name', 'last_name'];

    /**
     * Get the customer full name.
     */
    public function getNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
