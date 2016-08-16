<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoLoggerDataupload
 *
 * @ORM\Table(name="ivo_logger_dataupload")
 * @ORM\Entity
 */
class IvoLoggerDataupload
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ivo_upload_date", type="datetime", nullable=true)
     */
    private $ivoUploadDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_logger_serial_number", type="string", length=15, nullable=true)
     */
    private $ivoLoggerSerialNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_compressed_csv_file", type="blob", nullable=true)
     */
    private $ivoCompressedCsvFile;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ivo_csv_file_last_modified_date", type="datetime", nullable=true)
     */
    private $ivoCsvFileLastModifiedDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ivo_first_entry_timestamp", type="datetime", nullable=true)
     */
    private $ivoFirstEntryTimestamp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ivo_last_entry_timestamp", type="datetime", nullable=true)
     */
    private $ivoLastEntryTimestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_first_entry_sequence_number", type="string", nullable=true)
     */
    private $ivoFirstEntrySequenceNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_last_entry_sequence_number", type="string", nullable=true)
     */
    private $ivoLastEntrySequenceNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_uploader_user_id", type="string", length=15, nullable=true)
     */
    private $ivoUploaderUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ivo_logger_upload_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ivo_logger_dataupload_ivo_logger_upload_id_seq", allocationSize=1, initialValue=1)
     */
    private $ivoLoggerUploadId;



    /**
     * Set ivoUploadDate
     *
     * @param \DateTime $ivoUploadDate
     *
     * @return IvoLoggerDataupload
     */
    public function setIvoUploadDate($ivoUploadDate)
    {
        $this->ivoUploadDate = $ivoUploadDate;

        return $this;
    }

    /**
     * Get ivoUploadDate
     *
     * @return \DateTime
     */
    public function getIvoUploadDate()
    {
        return $this->ivoUploadDate;
    }

    /**
     * Set ivoLoggerSerialNumber
     *
     * @param string $ivoLoggerSerialNumber
     *
     * @return IvoLoggerDataupload
     */
    public function setIvoLoggerSerialNumber($ivoLoggerSerialNumber)
    {
        $this->ivoLoggerSerialNumber = $ivoLoggerSerialNumber;

        return $this;
    }

    /**
     * Get ivoLoggerSerialNumber
     *
     * @return string
     */
    public function getIvoLoggerSerialNumber()
    {
        return $this->ivoLoggerSerialNumber;
    }

    /**
     * Set ivoCompressedCsvFile
     *
     * @param string $ivoCompressedCsvFile
     *
     * @return IvoLoggerDataupload
     */
    public function setIvoCompressedCsvFile($ivoCompressedCsvFile)
    {
        $this->ivoCompressedCsvFile = $ivoCompressedCsvFile;

        return $this;
    }

    /**
     * Get ivoCompressedCsvFile
     *
     * @return string
     */
    public function getIvoCompressedCsvFile()
    {
        return $this->ivoCompressedCsvFile;
    }

    /**
     * Set ivoCsvFileLastModifiedDate
     *
     * @param \DateTime $ivoCsvFileLastModifiedDate
     *
     * @return IvoLoggerDataupload
     */
    public function setIvoCsvFileLastModifiedDate($ivoCsvFileLastModifiedDate)
    {
        $this->ivoCsvFileLastModifiedDate = $ivoCsvFileLastModifiedDate;

        return $this;
    }

    /**
     * Get ivoCsvFileLastModifiedDate
     *
     * @return \DateTime
     */
    public function getIvoCsvFileLastModifiedDate()
    {
        return $this->ivoCsvFileLastModifiedDate;
    }

    /**
     * Set ivoFirstEntryTimestamp
     *
     * @param \DateTime $ivoFirstEntryTimestamp
     *
     * @return IvoLoggerDataupload
     */
    public function setIvoFirstEntryTimestamp($ivoFirstEntryTimestamp)
    {
        $this->ivoFirstEntryTimestamp = $ivoFirstEntryTimestamp;

        return $this;
    }

    /**
     * Get ivoFirstEntryTimestamp
     *
     * @return \DateTime
     */
    public function getIvoFirstEntryTimestamp()
    {
        return $this->ivoFirstEntryTimestamp;
    }

    /**
     * Set ivoLastEntryTimestamp
     *
     * @param \DateTime $ivoLastEntryTimestamp
     *
     * @return IvoLoggerDataupload
     */
    public function setIvoLastEntryTimestamp($ivoLastEntryTimestamp)
    {
        $this->ivoLastEntryTimestamp = $ivoLastEntryTimestamp;

        return $this;
    }

    /**
     * Get ivoLastEntryTimestamp
     *
     * @return \DateTime
     */
    public function getIvoLastEntryTimestamp()
    {
        return $this->ivoLastEntryTimestamp;
    }

    /**
     * Set ivoFirstEntrySequenceNumber
     *
     * @param string $ivoFirstEntrySequenceNumber
     *
     * @return IvoLoggerDataupload
     */
    public function setIvoFirstEntrySequenceNumber($ivoFirstEntrySequenceNumber)
    {
        $this->ivoFirstEntrySequenceNumber = $ivoFirstEntrySequenceNumber;

        return $this;
    }

    /**
     * Get ivoFirstEntrySequenceNumber
     *
     * @return string
     */
    public function getIvoFirstEntrySequenceNumber()
    {
        return $this->ivoFirstEntrySequenceNumber;
    }

    /**
     * Set ivoLastEntrySequenceNumber
     *
     * @param string $ivoLastEntrySequenceNumber
     *
     * @return IvoLoggerDataupload
     */
    public function setIvoLastEntrySequenceNumber($ivoLastEntrySequenceNumber)
    {
        $this->ivoLastEntrySequenceNumber = $ivoLastEntrySequenceNumber;

        return $this;
    }

    /**
     * Get ivoLastEntrySequenceNumber
     *
     * @return string
     */
    public function getIvoLastEntrySequenceNumber()
    {
        return $this->ivoLastEntrySequenceNumber;
    }

    /**
     * Set ivoUploaderUserId
     *
     * @param string $ivoUploaderUserId
     *
     * @return IvoLoggerDataupload
     */
    public function setIvoUploaderUserId($ivoUploaderUserId)
    {
        $this->ivoUploaderUserId = $ivoUploaderUserId;

        return $this;
    }

    /**
     * Get ivoUploaderUserId
     *
     * @return string
     */
    public function getIvoUploaderUserId()
    {
        return $this->ivoUploaderUserId;
    }

    /**
     * Get ivoLoggerUploadId
     *
     * @return integer
     */
    public function getIvoLoggerUploadId()
    {
        return $this->ivoLoggerUploadId;
    }
}
