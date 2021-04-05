<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A CDCPMDRecord is a data structure representing a record in a CDC tabular data
 * format
 *       used for hospital data reporting. See
 * [documentation](/docs/cdc-covid.html) for details, and the linked CDC materials
 * for authoritative
 *       definitions used as the source here.
 */
class CDCPMDRecord extends StructuredValue
{
    /**
     * numc19died - DEATHS: Patients with suspected or confirmed COVID-19 who died in
     * the hospital, ED, or any overflow location.
     */
    private $cvdNumC19Died;

    /**
     * numc19mechventpats - HOSPITALIZED and VENTILATED: Patients hospitalized in an
     * NHSN inpatient care location who have suspected or confirmed COVID-19 and are on
     * a mechanical ventilator.
     */
    private $cvdNumC19MechVentPats;

    /**
     * collectiondate - Date for which patient counts are reported.
     */
    private $cvdCollectionDate;

    /**
     * numbeds - HOSPITAL INPATIENT BEDS: Inpatient beds, including all staffed,
     * licensed, and overflow (surge) beds used for inpatients.
     */
    private $cvdNumBeds;

    /**
     * numicubeds - ICU BEDS: Total number of staffed inpatient intensive care unit
     * (ICU) beds.
     */
    private $cvdNumICUBeds;

    /**
     * numc19hosppats - HOSPITALIZED: Patients currently hospitalized in an inpatient
     * care location who have suspected or confirmed COVID-19.
     */
    private $cvdNumC19HospPats;

    /**
     * numc19hopats - HOSPITAL ONSET: Patients hospitalized in an NHSN inpatient care
     * location with onset of suspected or confirmed COVID-19 14 or more days after
     * hospitalization.
     */
    private $cvdNumC19HOPats;

    /**
     * numvent - MECHANICAL VENTILATORS: Total number of ventilators available.
     */
    private $cvdNumVent;

    /**
     * numc19ofmechventpats - ED/OVERFLOW and VENTILATED: Patients with suspected or
     * confirmed COVID-19 who are in the ED or any overflow location awaiting an
     * inpatient bed and on a mechanical ventilator.
     */
    private $cvdNumC19OFMechVentPats;

    /**
     * Identifier of the NHSN facility that this data record applies to. Use
     * [[cvdFacilityCounty]] to indicate the county. To provide other details,
     * [[healthcareReportingData]] can be used on a [[Hospital]] entry.
     */
    private $cvdFacilityId;

    /**
     * numventuse - MECHANICAL VENTILATORS IN USE: Total number of ventilators in use.
     */
    private $cvdNumVentUse;

    /**
     * numc19overflowpats - ED/OVERFLOW: Patients with suspected or confirmed COVID-19
     * who are in the ED or any overflow location awaiting an inpatient bed.
     */
    private $cvdNumC19OverflowPats;

    /**
     * numicubedsocc - ICU BED OCCUPANCY: Total number of staffed inpatient ICU beds
     * that are occupied.
     */
    private $cvdNumICUBedsOcc;

    /**
     * numbedsocc - HOSPITAL INPATIENT BED OCCUPANCY: Total number of staffed inpatient
     * beds that are occupied.
     */
    private $cvdNumBedsOcc;

    /**
     * Name of the County of the NHSN facility that this data record applies to. Use
     * [[cvdFacilityId]] to identify the facility. To provide other details,
     * [[healthcareReportingData]] can be used on a [[Hospital]] entry.
     */
    private $cvdFacilityCounty;

    /**
     * numtotbeds - ALL HOSPITAL BEDS: Total number of all Inpatient and outpatient
     * beds, including all staffed,ICU, licensed, and overflow (surge) beds used for
     * inpatients or outpatients.
     */
    private $cvdNumTotBeds;

    public function getCvdNumC19Died()
    {
        return $this->cvdNumC19Died;
    }

    public function setCvdNumC19Died($cvdNumC19Died)
    {
        $this->cvdNumC19Died = $cvdNumC19Died;
    }

    public function getCvdNumC19MechVentPats()
    {
        return $this->cvdNumC19MechVentPats;
    }

    public function setCvdNumC19MechVentPats($cvdNumC19MechVentPats)
    {
        $this->cvdNumC19MechVentPats = $cvdNumC19MechVentPats;
    }

    public function getCvdCollectionDate()
    {
        return $this->cvdCollectionDate;
    }

    public function setCvdCollectionDate($cvdCollectionDate)
    {
        $this->cvdCollectionDate = $cvdCollectionDate;
    }

    public function getCvdNumBeds()
    {
        return $this->cvdNumBeds;
    }

    public function setCvdNumBeds($cvdNumBeds)
    {
        $this->cvdNumBeds = $cvdNumBeds;
    }

    public function getCvdNumICUBeds()
    {
        return $this->cvdNumICUBeds;
    }

    public function setCvdNumICUBeds($cvdNumICUBeds)
    {
        $this->cvdNumICUBeds = $cvdNumICUBeds;
    }

    public function getCvdNumC19HospPats()
    {
        return $this->cvdNumC19HospPats;
    }

    public function setCvdNumC19HospPats($cvdNumC19HospPats)
    {
        $this->cvdNumC19HospPats = $cvdNumC19HospPats;
    }

    public function getCvdNumC19HOPats()
    {
        return $this->cvdNumC19HOPats;
    }

    public function setCvdNumC19HOPats($cvdNumC19HOPats)
    {
        $this->cvdNumC19HOPats = $cvdNumC19HOPats;
    }

    public function getCvdNumVent()
    {
        return $this->cvdNumVent;
    }

    public function setCvdNumVent($cvdNumVent)
    {
        $this->cvdNumVent = $cvdNumVent;
    }

    public function getCvdNumC19OFMechVentPats()
    {
        return $this->cvdNumC19OFMechVentPats;
    }

    public function setCvdNumC19OFMechVentPats($cvdNumC19OFMechVentPats)
    {
        $this->cvdNumC19OFMechVentPats = $cvdNumC19OFMechVentPats;
    }

    public function getCvdFacilityId()
    {
        return $this->cvdFacilityId;
    }

    public function setCvdFacilityId($cvdFacilityId)
    {
        $this->cvdFacilityId = $cvdFacilityId;
    }

    public function getCvdNumVentUse()
    {
        return $this->cvdNumVentUse;
    }

    public function setCvdNumVentUse($cvdNumVentUse)
    {
        $this->cvdNumVentUse = $cvdNumVentUse;
    }

    public function getCvdNumC19OverflowPats()
    {
        return $this->cvdNumC19OverflowPats;
    }

    public function setCvdNumC19OverflowPats($cvdNumC19OverflowPats)
    {
        $this->cvdNumC19OverflowPats = $cvdNumC19OverflowPats;
    }

    public function getCvdNumICUBedsOcc()
    {
        return $this->cvdNumICUBedsOcc;
    }

    public function setCvdNumICUBedsOcc($cvdNumICUBedsOcc)
    {
        $this->cvdNumICUBedsOcc = $cvdNumICUBedsOcc;
    }

    public function getCvdNumBedsOcc()
    {
        return $this->cvdNumBedsOcc;
    }

    public function setCvdNumBedsOcc($cvdNumBedsOcc)
    {
        $this->cvdNumBedsOcc = $cvdNumBedsOcc;
    }

    public function getCvdFacilityCounty()
    {
        return $this->cvdFacilityCounty;
    }

    public function setCvdFacilityCounty($cvdFacilityCounty)
    {
        $this->cvdFacilityCounty = $cvdFacilityCounty;
    }

    public function getCvdNumTotBeds()
    {
        return $this->cvdNumTotBeds;
    }

    public function setCvdNumTotBeds($cvdNumTotBeds)
    {
        $this->cvdNumTotBeds = $cvdNumTotBeds;
    }
}

