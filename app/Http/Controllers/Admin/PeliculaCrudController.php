<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PeliculaRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\Pelicula;

/**
 * Class PeliculaCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PeliculaCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Pelicula::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/pelicula');
        CRUD::setEntityNameStrings('pelicula', 'peliculas');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'label' => 'Categoria',
            'type' => 'select',
            'name' => 'categoria_id',
            'entity'=> 'categoria', // <-- this is the relation method name
            'attribute' => 'nombre', // Column which user see in select box
            'model' => 'App\Models\categoria' // Model which contain FK
        ]);
        CRUD::column('director');
        CRUD::column('titulo');
        $this->crud->addColumns([
            [
            'name'      => 'portada', // The db column name
            'label'     => 'Portada', // Table column heading
            'type'      => 'image',
            'height' => '30px',
            'width'  => '30px',
            ],
        ]);
        CRUD::column('trailer');
        CRUD::column('slug');
        CRUD::column('descripcion');
        CRUD::column('valoracion');
        CRUD::column('año');
        CRUD::column('carateristicas');
        CRUD::column('deleted_at');
        CRUD::column('created_at');
        CRUD::column('updated_at');
    
        

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

        CRUD::setValidation(PeliculaRequest::class);
        $this->crud->addFields([
            // This is the field im trying to get working
            [
              'label' => 'Categoria',
              'type' => 'select',
              'name' => 'categoria_id',
              'entity'=> 'categoria', // <-- this is the relation method name
              'attribute' => 'nombre', // Column which user see in select box
              'model' => 'App\Models\categoria' // Model which contain FK
            ],
        ]);
        CRUD::field('director');
        CRUD::field('titulo');
        $this->crud->addFields([
            [
            'label' => "Portada",
            'name' => "portada",
            'type' => 'image',
            'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 0, // omit or set to 0 to allow any aspect ratio
            // 'disk'      => 's3_bucket', // in case you need to show images from a different disk
            // 'prefix'    => 'uploads/images/profile_pictures/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
            ],
        ]);
        $this->crud->addfields([
            // URL
            [
            'name'  => 'trailer',
            'label' => 'Trailer',
            'type'  => 'url',
            ],
        ]);
        CRUD::field('slug');
        CRUD::field('descripcion');
        CRUD::field('valoracion');
        CRUD::field('año');
        CRUD::field('carateristicas');

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


  
}
