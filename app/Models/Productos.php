<?php

namespace App\Models;

require_once ("AbstractDBConnection.php");
require_once (__DIR__."\..\Interfaces\Model.php");
require_once (__DIR__.'/../../vendor/autoload.php');

use App\Interfaces\Model;


class Productos extends AbstractDBConnection implements Model
{
    private ?int $id;
    private string $Nombre;
    private int $Tamano;
    private string $Clasificacion;
    private string $Referencia;
    private int $PrecioProduccion;
    private int $PrecioVenta;
    private string $Presentacion;
    private int $Cantidad;
    private ?string $Descripcion;
    private string $Estado;
    private int $Proveedor_id;

    /**
     * Productos constructor.
     * @param int|null $id
     * @param string $Nombre
     * @param int $Tamano
     * @param string $Clasificacion
     * @param string $Referencia
     * @param int $PrecioProduccion
     * @param int $PrecioVenta
     * @param string $Presentacion
     * @param int $Cantidad
     * @param string|null $Descripcion
     * @param string $Estado
     * @param int $Proveedor_id
     */
    public function __construct(array $Producto = [])
    {
        $this->id = $id;
        $this->Nombre = $Nombre;
        $this->Tamano = $Tamano;
        $this->Clasificacion = $Clasificacion;
        $this->Referencia = $Referencia;
        $this->PrecioProduccion = $PrecioProduccion;
        $this->PrecioVenta = $PrecioVenta;
        $this->Presentacion = $Presentacion;
        $this->Cantidad = $Cantidad;
        $this->Descripcion = $Descripcion;
        $this->Estado = $Estado;
        $this->Proveedor_id = $Proveedor_id;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->Nombre;
    }

    /**
     * @param string $Nombre
     */
    public function setNombre(string $Nombre): void
    {
        $this->Nombre = $Nombre;
    }

    /**
     * @return int
     */
    public function getTamano(): int
    {
        return $this->Tamano;
    }

    /**
     * @param int $Tamano
     */
    public function setTamano(int $Tamano): void
    {
        $this->Tamano = $Tamano;
    }

    /**
     * @return string
     */
    public function getClasificacion(): string
    {
        return $this->Clasificacion;
    }

    /**
     * @param string $Clasificacion
     */
    public function setClasificacion(string $Clasificacion): void
    {
        $this->Clasificacion = $Clasificacion;
    }

    /**
     * @return string
     */
    public function getReferencia(): string
    {
        return $this->Referencia;
    }

    /**
     * @param string $Referencia
     */
    public function setReferencia(string $Referencia): void
    {
        $this->Referencia = $Referencia;
    }

    /**
     * @return int
     */
    public function getPrecioProduccion(): int
    {
        return $this->PrecioProduccion;
    }

    /**
     * @param int $PrecioProduccion
     */
    public function setPrecioProduccion(int $PrecioProduccion): void
    {
        $this->PrecioProduccion = $PrecioProduccion;
    }

    /**
     * @return int
     */
    public function getPrecioVenta(): int
    {
        return $this->PrecioVenta;
    }

    /**
     * @param int $PrecioVenta
     */
    public function setPrecioVenta(int $PrecioVenta): void
    {
        $this->PrecioVenta = $PrecioVenta;
    }

    /**
     * @return string
     */
    public function getPresentacion(): string
    {
        return $this->Presentacion;
    }

    /**
     * @param string $Presentacion
     */
    public function setPresentacion(string $Presentacion): void
    {
        $this->Presentacion = $Presentacion;
    }

    /**
     * @return int
     */
    public function getCantidad(): int
    {
        return $this->Cantidad;
    }

    /**
     * @param int $Cantidad
     */
    public function setCantidad(int $Cantidad): void
    {
        $this->Cantidad = $Cantidad;
    }

    /**
     * @return string|null
     */
    public function getDescripcion(): ?string
    {
        return $this->Descripcion;
    }

    /**
     * @param string|null $Descripcion
     */
    public function setDescripcion(?string $Descripcion): void
    {
        $this->Descripcion = $Descripcion;
    }

    /**
     * @return string
     */
    public function getEstado(): string
    {
        return $this->Estado;
    }

    /**
     * @param string $Estado
     */
    public function setEstado(string $Estado): void
    {
        $this->Estado = $Estado;
    }

    /**
     * @return int
     */
    public function getProveedorId(): int
    {
        return $this->Proveedor_id;
    }

    /**
     * @param int $Proveedor_id
     */
    public function setProveedorId(int $Proveedor_id): void
    {
        $this->Proveedor_id = $Proveedor_id;
    }



}