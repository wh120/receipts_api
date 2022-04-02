<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ReceiptRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ReceiptCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ReceiptCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Receipt::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/receipt');
        CRUD::setEntityNameStrings('receipt', 'receipts');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('receipt_number');
        CRUD::column('description');
        CRUD::column('created_by_user_id');
        CRUD::column('must_approved_by_role');
        CRUD::column('receipt_type_id');


        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ReceiptRequest::class);

        CRUD::field('receipt_number');
        CRUD::field('description');
        CRUD::field('created_by_user_id');
        CRUD::field('must_approved_by_role');
        CRUD::field('receipt_type_id');
       // CRUD::field('items')->pivot=true;

        $this->crud->addField([
            'type'          => "relationship",
            'name'          => 'items', // the method on your model that defines the relationship
            'ajax'          => true,
            'inline_create' => [ 'entity' => 'tag' ]  // <--- OR THIS
        ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupShowOperation()
    {
        CRUD::column('receipt_number');
        CRUD::column('description');
        CRUD::column('created_by_user_id');
        CRUD::column('must_approved_by_role');
        CRUD::column('receipt_type_id');
        CRUD::column('items');
    }
}
