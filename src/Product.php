<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Any offered product or service. For example: a pair of shoes; a concert ticket;
 * the rental of a car; a haircut; or an episode of a TV show streamed online.
 */
class Product extends Thing
{
    /**
     * Indicates a ProductReturnPolicy that may be applicable.
     */
    private $hasProductReturnPolicy;

    /**
     * Review of the item.
     */
    private $reviews;

    /**
     * The GTIN-14 code of the product, or the product to which the offer refers. See
     * [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     */
    private $gtin14;

    /**
     * A Global Trade Item Number ([GTIN](https://www.gs1.org/standards/id-keys/gtin)).
     * GTINs identify trade items, including products and services, using numeric
     * identification codes. The [[gtin]] property generalizes the earlier [[gtin8]],
     * [[gtin12]], [[gtin13]], and [[gtin14]] properties. The GS1 [digital link
     * specifications](https://www.gs1.org/standards/Digital-Link/) express GTINs as
     * URLs. A correct [[gtin]] value should be a valid GTIN, which means that it
     * should be an all-numeric string of either 8, 12, 13 or 14 digits, or a "GS1
     * Digital Link" URL based on such a string. The numeric component should also have
     * a [valid GS1 check digit](https://www.gs1.org/services/check-digit-calculator)
     * and meet the other rules for valid GTINs. See also [GS1's GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) and
     * [Wikipedia](https://en.wikipedia.org/wiki/Global_Trade_Item_Number) for more
     * details. Left-padding of the gtin values is not required or encouraged.
     */
    private $gtin;

    /**
     * A pointer to another, somehow related product (or multiple products).
     */
    private $isRelatedTo;

    /**
     * A category for the item. Greater signs or slashes can be used to informally
     * indicate a category hierarchy.
     */
    private $category;

    /**
     * Indicates the [NATO stock
     * number](https://en.wikipedia.org/wiki/NATO_Stock_Number) (nsn) of a [[Product]].
     */
    private $nsn;

    /**
     * The color of the product.
     */
    private $color;

    /**
     * The height of the item.
     */
    private $height;

    /**
     * A pointer to another product (or multiple products) for which this product is an
     * accessory or spare part.
     */
    private $isAccessoryOrSparePartFor;

    /**
     * The product identifier, such as ISBN. For example: ``` meta itemprop="productID"
     * content="isbn:123-456-789" ```.
     */
    private $productID;

    /**
     * The GTIN-8 code of the product, or the product to which the offer refers. This
     * code is also known as EAN/UCC-8 or 8-digit EAN. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     */
    private $gtin8;

    /**
     * A material that something is made from, e.g. leather, wool, cotton, paper.
     */
    private $material;

    /**
     * A slogan or motto associated with the item.
     */
    private $slogan;

    /**
     * The date the item e.g. vehicle was purchased by the current owner.
     */
    private $purchaseDate;

    /**
     * The model of the product. Use with the URL of a ProductModel or a textual
     * representation of the model identifier. The URL of the ProductModel can be from
     * an external source. It is recommended to additionally provide strong product
     * identifiers via the gtin8/gtin13/gtin14 and mpn properties.
     */
    private $model;

    /**
     * Defines the energy efficiency Category (also known as "class" or "rating") for a
     * product according to an international energy efficiency standard.
     */
    private $hasEnergyConsumptionDetails;

    /**
     * Indicates the [[productGroupID]] for a [[ProductGroup]] that this product
     * [[isVariantOf]].
     */
    private $inProductGroupWithID;

    /**
     * A pointer to another product (or multiple products) for which this product is a
     * consumable.
     */
    private $isConsumableFor;

    /**
     * The GTIN-13 code of the product, or the product to which the offer refers. This
     * is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes
     * can be converted into a GTIN-13 code by simply adding a preceding zero. See [GS1
     * GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     */
    private $gtin13;

    /**
     * The release date of a product or product model. This can be used to distinguish
     * the exact variant of a product.
     */
    private $releaseDate;

    /**
     * Indicates the kind of product that this is a variant of. In the case of
     * [[ProductModel]], this is a pointer (from a ProductModel) to a base product from
     * which this product is a variant. It is safe to infer that the variant inherits
     * all product features from the base model, unless defined locally. This is not
     * transitive. In the case of a [[ProductGroup]], the group description also serves
     * as a template, representing a set of Products that vary on explicitly defined,
     * specific dimensions only (so it defines both a set of variants, as well as which
     * values distinguish amongst those variants). When used with [[ProductGroup]],
     * this property can apply to any [[Product]] included in the group.
     */
    private $isVariantOf;

    public function getHasProductReturnPolicy()
    {
        return $this->hasProductReturnPolicy;
    }

    public function setHasProductReturnPolicy($hasProductReturnPolicy)
    {
        $this->hasProductReturnPolicy = $hasProductReturnPolicy;
    }

    public function getReviews()
    {
        return $this->reviews;
    }

    public function setReviews($reviews)
    {
        $this->reviews = $reviews;
    }

    public function getGtin14()
    {
        return $this->gtin14;
    }

    public function setGtin14($gtin14)
    {
        $this->gtin14 = $gtin14;
    }

    public function getGtin()
    {
        return $this->gtin;
    }

    public function setGtin($gtin)
    {
        $this->gtin = $gtin;
    }

    public function getIsRelatedTo()
    {
        return $this->isRelatedTo;
    }

    public function setIsRelatedTo($isRelatedTo)
    {
        $this->isRelatedTo = $isRelatedTo;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getNsn()
    {
        return $this->nsn;
    }

    public function setNsn($nsn)
    {
        $this->nsn = $nsn;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getIsAccessoryOrSparePartFor()
    {
        return $this->isAccessoryOrSparePartFor;
    }

    public function setIsAccessoryOrSparePartFor($isAccessoryOrSparePartFor)
    {
        $this->isAccessoryOrSparePartFor = $isAccessoryOrSparePartFor;
    }

    public function getProductID()
    {
        return $this->productID;
    }

    public function setProductID($productID)
    {
        $this->productID = $productID;
    }

    public function getGtin8()
    {
        return $this->gtin8;
    }

    public function setGtin8($gtin8)
    {
        $this->gtin8 = $gtin8;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function setMaterial($material)
    {
        $this->material = $material;
    }

    public function getSlogan()
    {
        return $this->slogan;
    }

    public function setSlogan($slogan)
    {
        $this->slogan = $slogan;
    }

    public function getPurchaseDate()
    {
        return $this->purchaseDate;
    }

    public function setPurchaseDate($purchaseDate)
    {
        $this->purchaseDate = $purchaseDate;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getHasEnergyConsumptionDetails()
    {
        return $this->hasEnergyConsumptionDetails;
    }

    public function setHasEnergyConsumptionDetails($hasEnergyConsumptionDetails)
    {
        $this->hasEnergyConsumptionDetails = $hasEnergyConsumptionDetails;
    }

    public function getInProductGroupWithID()
    {
        return $this->inProductGroupWithID;
    }

    public function setInProductGroupWithID($inProductGroupWithID)
    {
        $this->inProductGroupWithID = $inProductGroupWithID;
    }

    public function getIsConsumableFor()
    {
        return $this->isConsumableFor;
    }

    public function setIsConsumableFor($isConsumableFor)
    {
        $this->isConsumableFor = $isConsumableFor;
    }

    public function getGtin13()
    {
        return $this->gtin13;
    }

    public function setGtin13($gtin13)
    {
        $this->gtin13 = $gtin13;
    }

    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;
    }

    public function getIsVariantOf()
    {
        return $this->isVariantOf;
    }

    public function setIsVariantOf($isVariantOf)
    {
        $this->isVariantOf = $isVariantOf;
    }
}

