<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A chemical or biologic substance, used as a medical therapy, that has a
 * physiological effect on an organism. Here the term drug is used interchangeably
 * with the term medicine although clinical knowledge make a clear difference
 * between them.
 */
class Drug extends Substance
{
    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use by
     * breastfeeding mothers.
     */
    private $breastfeedingWarning;

    /**
     * A route by which this drug may be administered, e.g. 'oral'.
     */
    private $administrationRoute;

    /**
     * Indicates the status of drug prescription eg. local catalogs classifications or
     * whether the drug is available by prescription or over-the-counter, etc.
     */
    private $prescriptionStatus;

    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use
     * during pregnancy.
     */
    private $pregnancyWarning;

    /**
     * Any other drug related to this one, for example commonly-prescribed
     * alternatives.
     */
    private $relatedDrug;

    /**
     * Link to the drug's label details.
     */
    private $labelDetails;

    /**
     * The unit in which the drug is measured, e.g. '5 mg tablet'.
     */
    private $drugUnit;

    /**
     * The class of drug this belongs to (e.g., statins).
     */
    private $drugClass;

    /**
     * Description of the absorption and elimination of drugs, including their
     * concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics,
     * pD).
     */
    private $clincalPharmacology;

    /**
     * Description of the absorption and elimination of drugs, including their
     * concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics,
     * pD).
     */
    private $clinicalPharmacology;

    /**
     * Link to prescribing information for the drug.
     */
    private $prescribingInfo;

    /**
     * A dosage form in which this drug/supplement is available, e.g. 'tablet',
     * 'suspension', 'injection'.
     */
    private $dosageForm;

    /**
     * Pregnancy category of this drug.
     */
    private $pregnancyCategory;

    /**
     * An available dosage strength for the drug.
     */
    private $availableStrength;

    /**
     * Any FDA or other warnings about the drug (text or URL).
     */
    private $warning;

    /**
     * Any precaution, guidance, contraindication, etc. related to consumption of
     * specific foods while taking this drug.
     */
    private $foodWarning;

    /**
     * The RxCUI drug identifier from RXNORM.
     */
    private $rxcui;

    /**
     * Any precaution, guidance, contraindication, etc. related to consumption of
     * alcohol while taking this drug.
     */
    private $alcoholWarning;

    /**
     * The insurance plans that cover this drug.
     */
    private $includedInHealthInsurancePlan;

    /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
     */
    private $activeIngredient;

    /**
     * Any information related to overdose on a drug, including signs or symptoms,
     * treatments, contact information for emergency response.
     */
    private $overdosage;

    /**
     * Another drug that is known to interact with this drug in a way that impacts the
     * effect of this drug or causes a risk to the patient. Note: disease interactions
     * are typically captured as contraindications.
     */
    private $interactingDrug;

    /**
     * True if the drug is available in a generic form (regardless of name).
     */
    private $isAvailableGenerically;

    public function getBreastfeedingWarning()
    {
        return $this->breastfeedingWarning;
    }

    public function setBreastfeedingWarning($breastfeedingWarning)
    {
        $this->breastfeedingWarning = $breastfeedingWarning;
    }

    public function getAdministrationRoute()
    {
        return $this->administrationRoute;
    }

    public function setAdministrationRoute($administrationRoute)
    {
        $this->administrationRoute = $administrationRoute;
    }

    public function getPrescriptionStatus()
    {
        return $this->prescriptionStatus;
    }

    public function setPrescriptionStatus($prescriptionStatus)
    {
        $this->prescriptionStatus = $prescriptionStatus;
    }

    public function getPregnancyWarning()
    {
        return $this->pregnancyWarning;
    }

    public function setPregnancyWarning($pregnancyWarning)
    {
        $this->pregnancyWarning = $pregnancyWarning;
    }

    public function getRelatedDrug()
    {
        return $this->relatedDrug;
    }

    public function setRelatedDrug($relatedDrug)
    {
        $this->relatedDrug = $relatedDrug;
    }

    public function getLabelDetails()
    {
        return $this->labelDetails;
    }

    public function setLabelDetails($labelDetails)
    {
        $this->labelDetails = $labelDetails;
    }

    public function getDrugUnit()
    {
        return $this->drugUnit;
    }

    public function setDrugUnit($drugUnit)
    {
        $this->drugUnit = $drugUnit;
    }

    public function getDrugClass()
    {
        return $this->drugClass;
    }

    public function setDrugClass($drugClass)
    {
        $this->drugClass = $drugClass;
    }

    public function getClincalPharmacology()
    {
        return $this->clincalPharmacology;
    }

    public function setClincalPharmacology($clincalPharmacology)
    {
        $this->clincalPharmacology = $clincalPharmacology;
    }

    public function getClinicalPharmacology()
    {
        return $this->clinicalPharmacology;
    }

    public function setClinicalPharmacology($clinicalPharmacology)
    {
        $this->clinicalPharmacology = $clinicalPharmacology;
    }

    public function getPrescribingInfo()
    {
        return $this->prescribingInfo;
    }

    public function setPrescribingInfo($prescribingInfo)
    {
        $this->prescribingInfo = $prescribingInfo;
    }

    public function getDosageForm()
    {
        return $this->dosageForm;
    }

    public function setDosageForm($dosageForm)
    {
        $this->dosageForm = $dosageForm;
    }

    public function getPregnancyCategory()
    {
        return $this->pregnancyCategory;
    }

    public function setPregnancyCategory($pregnancyCategory)
    {
        $this->pregnancyCategory = $pregnancyCategory;
    }

    public function getAvailableStrength()
    {
        return $this->availableStrength;
    }

    public function setAvailableStrength($availableStrength)
    {
        $this->availableStrength = $availableStrength;
    }

    public function getWarning()
    {
        return $this->warning;
    }

    public function setWarning($warning)
    {
        $this->warning = $warning;
    }

    public function getFoodWarning()
    {
        return $this->foodWarning;
    }

    public function setFoodWarning($foodWarning)
    {
        $this->foodWarning = $foodWarning;
    }

    public function getRxcui()
    {
        return $this->rxcui;
    }

    public function setRxcui($rxcui)
    {
        $this->rxcui = $rxcui;
    }

    public function getAlcoholWarning()
    {
        return $this->alcoholWarning;
    }

    public function setAlcoholWarning($alcoholWarning)
    {
        $this->alcoholWarning = $alcoholWarning;
    }

    public function getIncludedInHealthInsurancePlan()
    {
        return $this->includedInHealthInsurancePlan;
    }

    public function setIncludedInHealthInsurancePlan($includedInHealthInsurancePlan)
    {
        $this->includedInHealthInsurancePlan = $includedInHealthInsurancePlan;
    }

    public function getActiveIngredient()
    {
        return $this->activeIngredient;
    }

    public function setActiveIngredient($activeIngredient)
    {
        $this->activeIngredient = $activeIngredient;
    }

    public function getOverdosage()
    {
        return $this->overdosage;
    }

    public function setOverdosage($overdosage)
    {
        $this->overdosage = $overdosage;
    }

    public function getInteractingDrug()
    {
        return $this->interactingDrug;
    }

    public function setInteractingDrug($interactingDrug)
    {
        $this->interactingDrug = $interactingDrug;
    }

    public function getIsAvailableGenerically()
    {
        return $this->isAvailableGenerically;
    }

    public function setIsAvailableGenerically($isAvailableGenerically)
    {
        $this->isAvailableGenerically = $isAvailableGenerically;
    }
}

