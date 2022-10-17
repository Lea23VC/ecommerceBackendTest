<a href="https://gitmoji.dev">
  <img src="https://img.shields.io/badge/gitmoji-%20😜%20😍-FFDD67.svg?style=flat-square" alt="Gitmoji">
</a> ![Vercel](https://vercelbadge.vercel.app/api/Lea23VC/ecommerceBackendTest)

# Project: Ecommerce Test Backend
Este backend fue desarrollado en Laravel.  
  
Desarrollado para un test de selección, se encarga de crear una APIrest usando una base de datos ya existente de productos y categorias.

<b>Link repositorio del frontend:</b>
https://github.com/Lea23VC/ecommerceFrontendTest

<b>Link deploy backend en Vercel:</b>
https://ecommerce-backend-test.vercel.app/

## Rutas

El APIrest se utilizá a través GET requests en las siguientes rutas, las cuales devuelve su respuesta en formato JSON.

| **Ruta** | **Detalle** |
| --- | --- |
| /products | Obtiene los productos de la base datos |
| /products/1 | Obtiene los datos del producto con ID especificado (ej: 1) |
| /categories | Obtiene todas las categorías del a BBDD |
| /categories/1 | Obtiene los datos de la categoría con ID especificado (ej: 1) |

## Paginación

La paginación del API, se utilizá través de los parametros: **page** y **items_per_page.**

- items_per_page: Cantidad de items por pagina
- page: pagina actual de la paginación


## End-point: Lista de productos
### Metodo: GET
>```
>/products
>```
### Parametros de consulta

|Parametros|Detalle|
|---|---|
|name|(string) Nombre de producto|
|products_by_name_order|(string) Orden según nombre ("asc" o "desc")|
|products_by_price_order|(string) Orden según precio ("asc" o "desc")|
|products_by_discount_order|(string) Orden según descuento ("asc" o "desc")|
|category|(int) ID de la categoría|
|min_price|(int) precio minimo|
|max_price|(int) precio maximo|
|min_discount|(int) descuento minimo|
|max_discount|(int) descuento maximo|
|items_per_page|(int) Cantidad de elementos por pagina|
|page|(int) Pagina actual|

### Resultado de consulta (JSON)

```json
{
    "data": [
        {
            "id": 5,
            "name": "ENERGETICA MR BIG",
            "url_image": "https://dojiw2m9tvv09.cloudfront.net/11132/product/misterbig3308256.jpg",
            "price": 1490,
            "discount": 20
        },
        {
            "id": 6,
            "name": "ENERGETICA RED BULL",
            "url_image": "https://dojiw2m9tvv09.cloudfront.net/11132/product/redbull8381.jpg",
            "price": 1490,
            "discount": 0
        },
        {
            "id": 7,
            "name": "ENERGETICA SCORE",
            "url_image": "https://dojiw2m9tvv09.cloudfront.net/11132/product/logo7698.png",
            "price": 1290,
            "discount": 0
        },
        {
            "id": 8,
            "name": "PISCO ALTO DEL CARMEN 35º",
            "url_image": "https://dojiw2m9tvv09.cloudfront.net/11132/product/alto8532.jpg",
            "price": 7990,
            "discount": 10
        },
        {
            "id": 9,
            "name": "PISCO ALTO DEL CARMEN 40º ",
            "url_image": "https://dojiw2m9tvv09.cloudfront.net/11132/product/alto408581.jpg",
            "price": 5990,
            "discount": 0
        },
        {
            "id": 10,
            "name": "PISCO ARTESANOS 35º ",
            "url_image": "https://dojiw2m9tvv09.cloudfront.net/11132/product/artesanos8818.jpg",
            "price": 3990,
            "discount": 0
        },
        {
            "id": 11,
            "name": "PISCO BAUZA 40º ",
            "url_image": "https://dojiw2m9tvv09.cloudfront.net/11132/product/bauza408831.jpg",
            "price": 4990,
            "discount": 0
        },
        {
            "id": 12,
            "name": "PISCO CAMPANARIO 35º",
            "url_image": "https://dojiw2m9tvv09.cloudfront.net/11132/product/campanario8845.jpg",
            "price": 2990,
            "discount": 20
        },
        {
            "id": 13,
            "name": "PISCO CAMPANARIO 40º",
            "url_image": "https://dojiw2m9tvv09.cloudfront.net/11132/product/campanario408881.jpg",
            "price": 3990,
            "discount": 20
        },
        {
            "id": 14,
            "name": "PISCO ESPIRITU DEL ELQUI 40º",
            "url_image": "https://dojiw2m9tvv09.cloudfront.net/11132/product/espiritu8936.jpg",
            "price": 5990,
            "discount": 20
        },
        {
            "id": 15,
            "name": "PISCO ESPIRITU DEL ELQUI 45º",
            "url_image": "https://dojiw2m9tvv09.cloudfront.net/11132/product/espiritu8957.jpg",
            "price": 6990,
            "discount": 5
        },
        {
            "id": 16,
            "name": "PISCO HORCON QUEMADO 35º",
            "url_image": "https://dojiw2m9tvv09.cloudfront.net/11132/product/horcon359049.jpg",
            "price": 6990,
            "discount": 20
        },
        {
            "id": 17,
            "name": "PISCO HORCON QUEMADO 40º",
            "url_image": "https://dojiw2m9tvv09.cloudfront.net/11132/product/horcon409062.jpg",
            "price": 7990,
            "discount": 20
        },
        {
            "id": 18,
            "name": "PISCO HORCON QUEMADO 46º",
            "url_image": "https://dojiw2m9tvv09.cloudfront.net/11132/product/horcon469075.jpg",
            "price": 8990,
            "discount": 20
        },
        {
            "id": 19,
            "name": "PISCO MISTRAL 35º",
            "url_image": "https://dojiw2m9tvv09.cloudfront.net/11132/product/mistral359200.jpg",
            "price": 4990,
            "discount": 20
        }
    ],
    "links": {
        "first": "http://ecommerce-backend-test.vercel.app/products?page=1",
        "last": "http://ecommerce-backend-test.vercel.app/products?page=4",
        "prev": null,
        "next": "http://ecommerce-backend-test.vercel.app/products?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 4,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://ecommerce-backend-test.vercel.app/products?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": "http://ecommerce-backend-test.vercel.app/products?page=2",
                "label": "2",
                "active": false
            },
            {
                "url": "http://ecommerce-backend-test.vercel.app/products?page=3",
                "label": "3",
                "active": false
            },
            {
                "url": "http://ecommerce-backend-test.vercel.app/products?page=4",
                "label": "4",
                "active": false
            },
            {
                "url": "http://ecommerce-backend-test.vercel.app/products?page=2",
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http://ecommerce-backend-test.vercel.app/products",
        "per_page": 15,
        "to": 15,
        "total": 57
    }
}
```

#### Ejemplos

>```
>/products?items_per_page=15
>/products?name=energetica
>/products?name=energetica&items_per_page=5&category=2&products_by_price_order=asc
>```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Producto especifico
### Metodo: GET
>```
>/products/:id
>```
### Resultado de consulta (JSON)


```json
{
   "success":true,
   "data":{
      "id":5,
      "name":"ENERGETICA MR BIG",
      "url_image":"https:\/\/dojiw2m9tvv09.cloudfront.net\/11132\/product\/misterbig3308256.jpg",
      "price":1490,
      "discount":20
   },
   "message":"Product retrieved successfully"
}
```

#### Ejemplos

>```
>/products/5
>/products/7
>```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Categorias
### Metodo: GET
>```
>/categories
>```


### Parametros de consulta

|Parametros|Detalle|
|---|---|
|category|(int) ID de la categoría|




### Resultado de consulta (JSON)


```json
{
   "data":[
      {
         "id":1,
         "name":"bebida energetica"
      },
      {
         "id":2,
         "name":"pisco"
      },
      {
         "id":3,
         "name":"ron"
      },
      {
         "id":4,
         "name":"bebida"
      },
      {
         "id":5,
         "name":"snack"
      },
      {
         "id":6,
         "name":"cerveza"
      },
      {
         "id":7,
         "name":"vodka"
      }
   ]
}
```
_________________________________________________
Powered By: [postman-to-markdown](https://github.com/bautistaj/postman-to-markdown/)
