<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Reference\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class HostConfigNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\HostConfig') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\HostConfig) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (empty($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Docker\API\Model\HostConfig();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'Binds')) {
            $value = $data->{'Binds'};
            if (is_array($data->{'Binds'})) {
                $values = [];
                foreach ($data->{'Binds'} as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            }
            if (is_null($data->{'Binds'})) {
                $value = $data->{'Binds'};
            }
            $object->setBinds($value);
        }
        if (property_exists($data, 'Links')) {
            $value_2 = $data->{'Links'};
            if (is_array($data->{'Links'})) {
                $values_1 = [];
                foreach ($data->{'Links'} as $value_3) {
                    $values_1[] = $value_3;
                }
                $value_2 = $values_1;
            }
            if (is_null($data->{'Links'})) {
                $value_2 = $data->{'Links'};
            }
            $object->setLinks($value_2);
        }
        if (property_exists($data, 'LxcConf')) {
            $value_4 = $data->{'LxcConf'};
            if (is_object($data->{'LxcConf'})) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data->{'LxcConf'} as $key => $value_5) {
                    $values_2[$key] = $value_5;
                }
                $value_4 = $values_2;
            }
            if (isset($data->{'LxcConf'})) {
                $value_4 = $data->{'LxcConf'};
            }
            $object->setLxcConf($value_4);
        }
        if (property_exists($data, 'Memory')) {
            $object->setMemory($data->{'Memory'});
        }
        if (property_exists($data, 'MemorySwap')) {
            $object->setMemorySwap($data->{'MemorySwap'});
        }
        if (property_exists($data, 'CpuShares')) {
            $object->setCpuShares($data->{'CpuShares'});
        }
        if (property_exists($data, 'CpuPeriod')) {
            $object->setCpuPeriod($data->{'CpuPeriod'});
        }
        if (property_exists($data, 'CpusetCpus')) {
            $object->setCpusetCpus($data->{'CpusetCpus'});
        }
        if (property_exists($data, 'CpusetMems')) {
            $object->setCpusetMems($data->{'CpusetMems'});
        }
        if (property_exists($data, 'BlkioWeight')) {
            $object->setBlkioWeight($data->{'BlkioWeight'});
        }
        if (property_exists($data, 'BlkioWeightDevice')) {
            $value_6 = $data->{'BlkioWeightDevice'};
            if (is_array($data->{'BlkioWeightDevice'})) {
                $values_3 = [];
                foreach ($data->{'BlkioWeightDevice'} as $value_7) {
                    $values_3[] = $this->serializer->deserialize($value_7, 'Docker\\API\\Model\\DeviceWeight', 'raw', $context);
                }
                $value_6 = $values_3;
            }
            if (is_null($data->{'BlkioWeightDevice'})) {
                $value_6 = $data->{'BlkioWeightDevice'};
            }
            $object->setBlkioWeightDevice($value_6);
        }
        if (property_exists($data, 'BlkioDeviceReadBps')) {
            $value_8 = $data->{'BlkioDeviceReadBps'};
            if (is_array($data->{'BlkioDeviceReadBps'})) {
                $values_4 = [];
                foreach ($data->{'BlkioDeviceReadBps'} as $value_9) {
                    $values_4[] = $this->serializer->deserialize($value_9, 'Docker\\API\\Model\\DeviceRate', 'raw', $context);
                }
                $value_8 = $values_4;
            }
            if (is_null($data->{'BlkioDeviceReadBps'})) {
                $value_8 = $data->{'BlkioDeviceReadBps'};
            }
            $object->setBlkioDeviceReadBps($value_8);
        }
        if (property_exists($data, 'BlkioDeviceReadIOps')) {
            $value_10 = $data->{'BlkioDeviceReadIOps'};
            if (is_array($data->{'BlkioDeviceReadIOps'})) {
                $values_5 = [];
                foreach ($data->{'BlkioDeviceReadIOps'} as $value_11) {
                    $values_5[] = $this->serializer->deserialize($value_11, 'Docker\\API\\Model\\DeviceRate', 'raw', $context);
                }
                $value_10 = $values_5;
            }
            if (is_null($data->{'BlkioDeviceReadIOps'})) {
                $value_10 = $data->{'BlkioDeviceReadIOps'};
            }
            $object->setBlkioDeviceReadIOps($value_10);
        }
        if (property_exists($data, 'BlkioDeviceWriteBps')) {
            $value_12 = $data->{'BlkioDeviceWriteBps'};
            if (is_array($data->{'BlkioDeviceWriteBps'})) {
                $values_6 = [];
                foreach ($data->{'BlkioDeviceWriteBps'} as $value_13) {
                    $values_6[] = $this->serializer->deserialize($value_13, 'Docker\\API\\Model\\DeviceRate', 'raw', $context);
                }
                $value_12 = $values_6;
            }
            if (is_null($data->{'BlkioDeviceWriteBps'})) {
                $value_12 = $data->{'BlkioDeviceWriteBps'};
            }
            $object->setBlkioDeviceWriteBps($value_12);
        }
        if (property_exists($data, 'BlkioDeviceWriteIOps')) {
            $value_14 = $data->{'BlkioDeviceWriteIOps'};
            if (is_array($data->{'BlkioDeviceWriteIOps'})) {
                $values_7 = [];
                foreach ($data->{'BlkioDeviceWriteIOps'} as $value_15) {
                    $values_7[] = $this->serializer->deserialize($value_15, 'Docker\\API\\Model\\DeviceRate', 'raw', $context);
                }
                $value_14 = $values_7;
            }
            if (is_null($data->{'BlkioDeviceWriteIOps'})) {
                $value_14 = $data->{'BlkioDeviceWriteIOps'};
            }
            $object->setBlkioDeviceWriteIOps($value_14);
        }
        if (property_exists($data, 'MemorySwappiness')) {
            $object->setMemorySwappiness($data->{'MemorySwappiness'});
        }
        if (property_exists($data, 'OomKillDisable')) {
            $object->setOomKillDisable($data->{'OomKillDisable'});
        }
        if (property_exists($data, 'OomScoreAdj')) {
            $object->setOomScoreAdj($data->{'OomScoreAdj'});
        }
        if (property_exists($data, 'PidsLimit')) {
            $object->setPidsLimit($data->{'PidsLimit'});
        }
        if (property_exists($data, 'PortBindings')) {
            $value_16 = $data->{'PortBindings'};
            if (is_object($data->{'PortBindings'})) {
                $values_8 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data->{'PortBindings'} as $key_1 => $value_17) {
                    $value_18 = $value_17;
                    if (is_array($value_17)) {
                        $values_9 = [];
                        foreach ($value_17 as $value_19) {
                            $values_9[] = $this->serializer->deserialize($value_19, 'Docker\\API\\Model\\PortBinding', 'raw', $context);
                        }
                        $value_18 = $values_9;
                    }
                    if (is_null($value_17)) {
                        $value_18 = $value_17;
                    }
                    $values_8[$key_1] = $value_18;
                }
                $value_16 = $values_8;
            }
            if (is_null($data->{'PortBindings'})) {
                $value_16 = $data->{'PortBindings'};
            }
            $object->setPortBindings($value_16);
        }
        if (property_exists($data, 'PublishAllPorts')) {
            $object->setPublishAllPorts($data->{'PublishAllPorts'});
        }
        if (property_exists($data, 'Privileged')) {
            $object->setPrivileged($data->{'Privileged'});
        }
        if (property_exists($data, 'ReadonlyRootfs')) {
            $object->setReadonlyRootfs($data->{'ReadonlyRootfs'});
        }
        if (property_exists($data, 'Dns')) {
            $value_20 = $data->{'Dns'};
            if (is_array($data->{'Dns'})) {
                $values_10 = [];
                foreach ($data->{'Dns'} as $value_21) {
                    $values_10[] = $value_21;
                }
                $value_20 = $values_10;
            }
            if (is_null($data->{'Dns'})) {
                $value_20 = $data->{'Dns'};
            }
            $object->setDns($value_20);
        }
        if (property_exists($data, 'DnsOptions')) {
            $value_22 = $data->{'DnsOptions'};
            if (is_array($data->{'DnsOptions'})) {
                $values_11 = [];
                foreach ($data->{'DnsOptions'} as $value_23) {
                    $values_11[] = $value_23;
                }
                $value_22 = $values_11;
            }
            if (is_null($data->{'DnsOptions'})) {
                $value_22 = $data->{'DnsOptions'};
            }
            $object->setDnsOptions($value_22);
        }
        if (property_exists($data, 'DnsSearch')) {
            $value_24 = $data->{'DnsSearch'};
            if (is_array($data->{'DnsSearch'})) {
                $values_12 = [];
                foreach ($data->{'DnsSearch'} as $value_25) {
                    $values_12[] = $value_25;
                }
                $value_24 = $values_12;
            }
            if (is_null($data->{'DnsSearch'})) {
                $value_24 = $data->{'DnsSearch'};
            }
            $object->setDnsSearch($value_24);
        }
        if (property_exists($data, 'ExtraHosts')) {
            $value_26 = $data->{'ExtraHosts'};
            if (is_array($data->{'ExtraHosts'})) {
                $values_13 = [];
                foreach ($data->{'ExtraHosts'} as $value_27) {
                    $values_13[] = $value_27;
                }
                $value_26 = $values_13;
            }
            if (is_null($data->{'ExtraHosts'})) {
                $value_26 = $data->{'ExtraHosts'};
            }
            $object->setExtraHosts($value_26);
        }
        if (property_exists($data, 'VolumesFrom')) {
            $value_28 = $data->{'VolumesFrom'};
            if (is_array($data->{'VolumesFrom'})) {
                $values_14 = [];
                foreach ($data->{'VolumesFrom'} as $value_29) {
                    $values_14[] = $value_29;
                }
                $value_28 = $values_14;
            }
            if (is_null($data->{'VolumesFrom'})) {
                $value_28 = $data->{'VolumesFrom'};
            }
            $object->setVolumesFrom($value_28);
        }
        if (property_exists($data, 'CapAdd')) {
            $value_30 = $data->{'CapAdd'};
            if (is_array($data->{'CapAdd'})) {
                $values_15 = [];
                foreach ($data->{'CapAdd'} as $value_31) {
                    $values_15[] = $value_31;
                }
                $value_30 = $values_15;
            }
            if (is_null($data->{'CapAdd'})) {
                $value_30 = $data->{'CapAdd'};
            }
            $object->setCapAdd($value_30);
        }
        if (property_exists($data, 'CapDrop')) {
            $value_32 = $data->{'CapDrop'};
            if (is_array($data->{'CapDrop'})) {
                $values_16 = [];
                foreach ($data->{'CapDrop'} as $value_33) {
                    $values_16[] = $value_33;
                }
                $value_32 = $values_16;
            }
            if (is_null($data->{'CapDrop'})) {
                $value_32 = $data->{'CapDrop'};
            }
            $object->setCapDrop($value_32);
        }
        if (property_exists($data, 'GroupAdd')) {
            $value_34 = $data->{'GroupAdd'};
            if (is_array($data->{'GroupAdd'})) {
                $values_17 = [];
                foreach ($data->{'GroupAdd'} as $value_35) {
                    $values_17[] = $value_35;
                }
                $value_34 = $values_17;
            }
            if (is_null($data->{'GroupAdd'})) {
                $value_34 = $data->{'GroupAdd'};
            }
            $object->setGroupAdd($value_34);
        }
        if (property_exists($data, 'RestartPolicy')) {
            $object->setRestartPolicy($this->serializer->deserialize($data->{'RestartPolicy'}, 'Docker\\API\\Model\\RestartPolicy', 'raw', $context));
        }
        if (property_exists($data, 'UsernsMode')) {
            $object->setUsernsMode($data->{'UsernsMode'});
        }
        if (property_exists($data, 'NetworkMode')) {
            $object->setNetworkMode($data->{'NetworkMode'});
        }
        if (property_exists($data, 'Devices')) {
            $value_36 = $data->{'Devices'};
            if (is_array($data->{'Devices'})) {
                $values_18 = [];
                foreach ($data->{'Devices'} as $value_37) {
                    $values_18[] = $this->serializer->deserialize($value_37, 'Docker\\API\\Model\\Device', 'raw', $context);
                }
                $value_36 = $values_18;
            }
            if (is_null($data->{'Devices'})) {
                $value_36 = $data->{'Devices'};
            }
            $object->setDevices($value_36);
        }
        if (property_exists($data, 'Ulimits')) {
            $value_38 = $data->{'Ulimits'};
            if (is_array($data->{'Ulimits'})) {
                $values_19 = [];
                foreach ($data->{'Ulimits'} as $value_39) {
                    $values_19[] = $this->serializer->deserialize($value_39, 'Docker\\API\\Model\\Ulimit', 'raw', $context);
                }
                $value_38 = $values_19;
            }
            if (is_null($data->{'Ulimits'})) {
                $value_38 = $data->{'Ulimits'};
            }
            $object->setUlimits($value_38);
        }
        if (property_exists($data, 'SecurityOpt')) {
            $value_40 = $data->{'SecurityOpt'};
            if (is_array($data->{'SecurityOpt'})) {
                $values_20 = [];
                foreach ($data->{'SecurityOpt'} as $value_41) {
                    $values_20[] = $value_41;
                }
                $value_40 = $values_20;
            }
            if (is_null($data->{'SecurityOpt'})) {
                $value_40 = $data->{'SecurityOpt'};
            }
            $object->setSecurityOpt($value_40);
        }
        if (property_exists($data, 'LogConfig')) {
            $object->setLogConfig($this->serializer->deserialize($data->{'LogConfig'}, 'Docker\\API\\Model\\LogConfig', 'raw', $context));
        }
        if (property_exists($data, 'CgroupParent')) {
            $object->setCgroupParent($data->{'CgroupParent'});
        }
        if (property_exists($data, 'VolumeDriver')) {
            $object->setVolumeDriver($data->{'VolumeDriver'});
        }
        if (property_exists($data, 'ShmSize')) {
            $object->setShmSize($data->{'ShmSize'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data  = new \stdClass();
        $value = $object->getBinds();
        if (is_array($object->getBinds())) {
            $values = [];
            foreach ($object->getBinds() as $value_1) {
                $values[] = $value_1;
            }
            $value = $values;
        }
        if (is_null($object->getBinds())) {
            $value = $object->getBinds();
        }
        $data->{'Binds'} = $value;
        $value_2         = $object->getLinks();
        if (is_array($object->getLinks())) {
            $values_1 = [];
            foreach ($object->getLinks() as $value_3) {
                $values_1[] = $value_3;
            }
            $value_2 = $values_1;
        }
        if (is_null($object->getLinks())) {
            $value_2 = $object->getLinks();
        }
        $data->{'Links'} = $value_2;
        if (null !== $object->getLxcConf()) {
            $value_4 = $object->getLxcConf();
            if (is_object($object->getLxcConf())) {
                $values_2 = new \stdClass();
                foreach ($object->getLxcConf() as $key => $value_5) {
                    $values_2->{$key} = $value_5;
                }
                $value_4 = $values_2;
            }
            if (!is_null($object->getLxcConf())) {
                $value_4 = $object->getLxcConf();
            }
            $data->{'LxcConf'} = $value_4;
        }
        if (null !== $object->getMemory()) {
            $data->{'Memory'} = $object->getMemory();
        }
        if (null !== $object->getMemorySwap()) {
            $data->{'MemorySwap'} = $object->getMemorySwap();
        }
        if (null !== $object->getCpuShares()) {
            $data->{'CpuShares'} = $object->getCpuShares();
        }
        if (null !== $object->getCpuPeriod()) {
            $data->{'CpuPeriod'} = $object->getCpuPeriod();
        }
        if (null !== $object->getCpusetCpus()) {
            $data->{'CpusetCpus'} = $object->getCpusetCpus();
        }
        if (null !== $object->getCpusetMems()) {
            $data->{'CpusetMems'} = $object->getCpusetMems();
        }
        if (null !== $object->getBlkioWeight()) {
            $data->{'BlkioWeight'} = $object->getBlkioWeight();
        }
        $value_6 = $object->getBlkioWeightDevice();
        if (is_array($object->getBlkioWeightDevice())) {
            $values_3 = [];
            foreach ($object->getBlkioWeightDevice() as $value_7) {
                $values_3[] = $this->serializer->serialize($value_7, 'raw', $context);
            }
            $value_6 = $values_3;
        }
        if (is_null($object->getBlkioWeightDevice())) {
            $value_6 = $object->getBlkioWeightDevice();
        }
        $data->{'BlkioWeightDevice'} = $value_6;
        $value_8                     = $object->getBlkioDeviceReadBps();
        if (is_array($object->getBlkioDeviceReadBps())) {
            $values_4 = [];
            foreach ($object->getBlkioDeviceReadBps() as $value_9) {
                $values_4[] = $this->serializer->serialize($value_9, 'raw', $context);
            }
            $value_8 = $values_4;
        }
        if (is_null($object->getBlkioDeviceReadBps())) {
            $value_8 = $object->getBlkioDeviceReadBps();
        }
        $data->{'BlkioDeviceReadBps'} = $value_8;
        $value_10                     = $object->getBlkioDeviceReadIOps();
        if (is_array($object->getBlkioDeviceReadIOps())) {
            $values_5 = [];
            foreach ($object->getBlkioDeviceReadIOps() as $value_11) {
                $values_5[] = $this->serializer->serialize($value_11, 'raw', $context);
            }
            $value_10 = $values_5;
        }
        if (is_null($object->getBlkioDeviceReadIOps())) {
            $value_10 = $object->getBlkioDeviceReadIOps();
        }
        $data->{'BlkioDeviceReadIOps'} = $value_10;
        $value_12                      = $object->getBlkioDeviceWriteBps();
        if (is_array($object->getBlkioDeviceWriteBps())) {
            $values_6 = [];
            foreach ($object->getBlkioDeviceWriteBps() as $value_13) {
                $values_6[] = $this->serializer->serialize($value_13, 'raw', $context);
            }
            $value_12 = $values_6;
        }
        if (is_null($object->getBlkioDeviceWriteBps())) {
            $value_12 = $object->getBlkioDeviceWriteBps();
        }
        $data->{'BlkioDeviceWriteBps'} = $value_12;
        $value_14                      = $object->getBlkioDeviceWriteIOps();
        if (is_array($object->getBlkioDeviceWriteIOps())) {
            $values_7 = [];
            foreach ($object->getBlkioDeviceWriteIOps() as $value_15) {
                $values_7[] = $this->serializer->serialize($value_15, 'raw', $context);
            }
            $value_14 = $values_7;
        }
        if (is_null($object->getBlkioDeviceWriteIOps())) {
            $value_14 = $object->getBlkioDeviceWriteIOps();
        }
        $data->{'BlkioDeviceWriteIOps'} = $value_14;
        if (null !== $object->getMemorySwappiness()) {
            $data->{'MemorySwappiness'} = $object->getMemorySwappiness();
        }
        if (null !== $object->getOomKillDisable()) {
            $data->{'OomKillDisable'} = $object->getOomKillDisable();
        }
        if (null !== $object->getOomScoreAdj()) {
            $data->{'OomScoreAdj'} = $object->getOomScoreAdj();
        }
        if (null !== $object->getPidsLimit()) {
            $data->{'PidsLimit'} = $object->getPidsLimit();
        }
        $value_16 = $object->getPortBindings();
        if (is_object($object->getPortBindings())) {
            $values_8 = new \stdClass();
            foreach ($object->getPortBindings() as $key_1 => $value_17) {
                $value_18 = $value_17;
                if (is_array($value_17)) {
                    $values_9 = [];
                    foreach ($value_17 as $value_19) {
                        $values_9[] = $this->serializer->serialize($value_19, 'raw', $context);
                    }
                    $value_18 = $values_9;
                }
                if (is_null($value_17)) {
                    $value_18 = $value_17;
                }
                $values_8->{$key_1} = $value_18;
            }
            $value_16 = $values_8;
        }
        if (is_null($object->getPortBindings())) {
            $value_16 = $object->getPortBindings();
        }
        $data->{'PortBindings'} = $value_16;
        if (null !== $object->getPublishAllPorts()) {
            $data->{'PublishAllPorts'} = $object->getPublishAllPorts();
        }
        if (null !== $object->getPrivileged()) {
            $data->{'Privileged'} = $object->getPrivileged();
        }
        if (null !== $object->getReadonlyRootfs()) {
            $data->{'ReadonlyRootfs'} = $object->getReadonlyRootfs();
        }
        $value_20 = $object->getDns();
        if (is_array($object->getDns())) {
            $values_10 = [];
            foreach ($object->getDns() as $value_21) {
                $values_10[] = $value_21;
            }
            $value_20 = $values_10;
        }
        if (is_null($object->getDns())) {
            $value_20 = $object->getDns();
        }
        $data->{'Dns'} = $value_20;
        $value_22      = $object->getDnsOptions();
        if (is_array($object->getDnsOptions())) {
            $values_11 = [];
            foreach ($object->getDnsOptions() as $value_23) {
                $values_11[] = $value_23;
            }
            $value_22 = $values_11;
        }
        if (is_null($object->getDnsOptions())) {
            $value_22 = $object->getDnsOptions();
        }
        $data->{'DnsOptions'} = $value_22;
        $value_24             = $object->getDnsSearch();
        if (is_array($object->getDnsSearch())) {
            $values_12 = [];
            foreach ($object->getDnsSearch() as $value_25) {
                $values_12[] = $value_25;
            }
            $value_24 = $values_12;
        }
        if (is_null($object->getDnsSearch())) {
            $value_24 = $object->getDnsSearch();
        }
        $data->{'DnsSearch'} = $value_24;
        $value_26            = $object->getExtraHosts();
        if (is_array($object->getExtraHosts())) {
            $values_13 = [];
            foreach ($object->getExtraHosts() as $value_27) {
                $values_13[] = $value_27;
            }
            $value_26 = $values_13;
        }
        if (is_null($object->getExtraHosts())) {
            $value_26 = $object->getExtraHosts();
        }
        $data->{'ExtraHosts'} = $value_26;
        $value_28             = $object->getVolumesFrom();
        if (is_array($object->getVolumesFrom())) {
            $values_14 = [];
            foreach ($object->getVolumesFrom() as $value_29) {
                $values_14[] = $value_29;
            }
            $value_28 = $values_14;
        }
        if (is_null($object->getVolumesFrom())) {
            $value_28 = $object->getVolumesFrom();
        }
        $data->{'VolumesFrom'} = $value_28;
        $value_30              = $object->getCapAdd();
        if (is_array($object->getCapAdd())) {
            $values_15 = [];
            foreach ($object->getCapAdd() as $value_31) {
                $values_15[] = $value_31;
            }
            $value_30 = $values_15;
        }
        if (is_null($object->getCapAdd())) {
            $value_30 = $object->getCapAdd();
        }
        $data->{'CapAdd'} = $value_30;
        $value_32         = $object->getCapDrop();
        if (is_array($object->getCapDrop())) {
            $values_16 = [];
            foreach ($object->getCapDrop() as $value_33) {
                $values_16[] = $value_33;
            }
            $value_32 = $values_16;
        }
        if (is_null($object->getCapDrop())) {
            $value_32 = $object->getCapDrop();
        }
        $data->{'CapDrop'} = $value_32;
        $value_34          = $object->getGroupAdd();
        if (is_array($object->getGroupAdd())) {
            $values_17 = [];
            foreach ($object->getGroupAdd() as $value_35) {
                $values_17[] = $value_35;
            }
            $value_34 = $values_17;
        }
        if (is_null($object->getGroupAdd())) {
            $value_34 = $object->getGroupAdd();
        }
        $data->{'GroupAdd'} = $value_34;
        if (null !== $object->getRestartPolicy()) {
            $data->{'RestartPolicy'} = $this->serializer->serialize($object->getRestartPolicy(), 'raw', $context);
        }
        if (null !== $object->getUsernsMode()) {
            $data->{'UsernsMode'} = $object->getUsernsMode();
        }
        if (null !== $object->getNetworkMode()) {
            $data->{'NetworkMode'} = $object->getNetworkMode();
        }
        $value_36 = $object->getDevices();
        if (is_array($object->getDevices())) {
            $values_18 = [];
            foreach ($object->getDevices() as $value_37) {
                $values_18[] = $this->serializer->serialize($value_37, 'raw', $context);
            }
            $value_36 = $values_18;
        }
        if (is_null($object->getDevices())) {
            $value_36 = $object->getDevices();
        }
        $data->{'Devices'} = $value_36;
        $value_38          = $object->getUlimits();
        if (is_array($object->getUlimits())) {
            $values_19 = [];
            foreach ($object->getUlimits() as $value_39) {
                $values_19[] = $this->serializer->serialize($value_39, 'raw', $context);
            }
            $value_38 = $values_19;
        }
        if (is_null($object->getUlimits())) {
            $value_38 = $object->getUlimits();
        }
        $data->{'Ulimits'} = $value_38;
        $value_40          = $object->getSecurityOpt();
        if (is_array($object->getSecurityOpt())) {
            $values_20 = [];
            foreach ($object->getSecurityOpt() as $value_41) {
                $values_20[] = $value_41;
            }
            $value_40 = $values_20;
        }
        if (is_null($object->getSecurityOpt())) {
            $value_40 = $object->getSecurityOpt();
        }
        $data->{'SecurityOpt'} = $value_40;
        if (null !== $object->getLogConfig()) {
            $data->{'LogConfig'} = $this->serializer->serialize($object->getLogConfig(), 'raw', $context);
        }
        if (null !== $object->getCgroupParent()) {
            $data->{'CgroupParent'} = $object->getCgroupParent();
        }
        if (null !== $object->getVolumeDriver()) {
            $data->{'VolumeDriver'} = $object->getVolumeDriver();
        }
        if (null !== $object->getShmSize()) {
            $data->{'ShmSize'} = $object->getShmSize();
        }

        return $data;
    }
}
