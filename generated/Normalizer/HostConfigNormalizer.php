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
    public function denormalize($data, $class, $format = null, array $context = array())
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
                $values = array();
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
                $values_1 = array();
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
            $values_2 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'LxcConf'} as $key => $value_4) {
                $values_2[$key] = $value_4;
            }
            $object->setLxcConf($values_2);
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
            $value_5 = $data->{'BlkioWeightDevice'};
            if (is_array($data->{'BlkioWeightDevice'})) {
                $values_3 = array();
                foreach ($data->{'BlkioWeightDevice'} as $value_6) {
                    $values_3[] = $this->serializer->deserialize($value_6, 'Docker\\API\\Model\\DeviceWeight', 'raw', $context);
                }
                $value_5 = $values_3;
            }
            if (is_null($data->{'BlkioWeightDevice'})) {
                $value_5 = $data->{'BlkioWeightDevice'};
            }
            $object->setBlkioWeightDevice($value_5);
        }
        if (property_exists($data, 'BlkioDeviceReadBps')) {
            $value_7 = $data->{'BlkioDeviceReadBps'};
            if (is_array($data->{'BlkioDeviceReadBps'})) {
                $values_4 = array();
                foreach ($data->{'BlkioDeviceReadBps'} as $value_8) {
                    $values_4[] = $this->serializer->deserialize($value_8, 'Docker\\API\\Model\\DeviceRate', 'raw', $context);
                }
                $value_7 = $values_4;
            }
            if (is_null($data->{'BlkioDeviceReadBps'})) {
                $value_7 = $data->{'BlkioDeviceReadBps'};
            }
            $object->setBlkioDeviceReadBps($value_7);
        }
        if (property_exists($data, 'BlkioDeviceReadIOps')) {
            $value_9 = $data->{'BlkioDeviceReadIOps'};
            if (is_array($data->{'BlkioDeviceReadIOps'})) {
                $values_5 = array();
                foreach ($data->{'BlkioDeviceReadIOps'} as $value_10) {
                    $values_5[] = $this->serializer->deserialize($value_10, 'Docker\\API\\Model\\DeviceRate', 'raw', $context);
                }
                $value_9 = $values_5;
            }
            if (is_null($data->{'BlkioDeviceReadIOps'})) {
                $value_9 = $data->{'BlkioDeviceReadIOps'};
            }
            $object->setBlkioDeviceReadIOps($value_9);
        }
        if (property_exists($data, 'BlkioDeviceWriteBps')) {
            $value_11 = $data->{'BlkioDeviceWriteBps'};
            if (is_array($data->{'BlkioDeviceWriteBps'})) {
                $values_6 = array();
                foreach ($data->{'BlkioDeviceWriteBps'} as $value_12) {
                    $values_6[] = $this->serializer->deserialize($value_12, 'Docker\\API\\Model\\DeviceRate', 'raw', $context);
                }
                $value_11 = $values_6;
            }
            if (is_null($data->{'BlkioDeviceWriteBps'})) {
                $value_11 = $data->{'BlkioDeviceWriteBps'};
            }
            $object->setBlkioDeviceWriteBps($value_11);
        }
        if (property_exists($data, 'BlkioDeviceWriteIOps')) {
            $value_13 = $data->{'BlkioDeviceWriteIOps'};
            if (is_array($data->{'BlkioDeviceWriteIOps'})) {
                $values_7 = array();
                foreach ($data->{'BlkioDeviceWriteIOps'} as $value_14) {
                    $values_7[] = $this->serializer->deserialize($value_14, 'Docker\\API\\Model\\DeviceRate', 'raw', $context);
                }
                $value_13 = $values_7;
            }
            if (is_null($data->{'BlkioDeviceWriteIOps'})) {
                $value_13 = $data->{'BlkioDeviceWriteIOps'};
            }
            $object->setBlkioDeviceWriteIOps($value_13);
        }
        if (property_exists($data, 'MemorySwappiness')) {
            $object->setMemorySwappiness($data->{'MemorySwappiness'});
        }
        if (property_exists($data, 'OomKillDisable')) {
            $object->setOomKillDisable($data->{'OomKillDisable'});
        }
        if (property_exists($data, 'PortBindings')) {
            $values_8 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'PortBindings'} as $key_1 => $value_15) {
                $values_8[$key_1] = $this->serializer->deserialize($value_15, 'Docker\\API\\Model\\PortBinding', 'raw', $context);
            }
            $object->setPortBindings($values_8);
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
            $values_9 = array();
            foreach ($data->{'Dns'} as $value_16) {
                $values_9[] = $value_16;
            }
            $object->setDns($values_9);
        }
        if (property_exists($data, 'DnsSearch')) {
            $values_10 = array();
            foreach ($data->{'DnsSearch'} as $value_17) {
                $values_10[] = $value_17;
            }
            $object->setDnsSearch($values_10);
        }
        if (property_exists($data, 'ExtraHosts')) {
            $value_18 = $data->{'ExtraHosts'};
            if (is_array($data->{'ExtraHosts'})) {
                $values_11 = array();
                foreach ($data->{'ExtraHosts'} as $value_19) {
                    $values_11[] = $value_19;
                }
                $value_18 = $values_11;
            }
            if (is_null($data->{'ExtraHosts'})) {
                $value_18 = $data->{'ExtraHosts'};
            }
            $object->setExtraHosts($value_18);
        }
        if (property_exists($data, 'VolumesFrom')) {
            $value_20 = $data->{'VolumesFrom'};
            if (is_array($data->{'VolumesFrom'})) {
                $values_12 = array();
                foreach ($data->{'VolumesFrom'} as $value_21) {
                    $values_12[] = $value_21;
                }
                $value_20 = $values_12;
            }
            if (is_null($data->{'VolumesFrom'})) {
                $value_20 = $data->{'VolumesFrom'};
            }
            $object->setVolumesFrom($value_20);
        }
        if (property_exists($data, 'CapAdd')) {
            $value_22 = $data->{'CapAdd'};
            if (is_array($data->{'CapAdd'})) {
                $values_13 = array();
                foreach ($data->{'CapAdd'} as $value_23) {
                    $values_13[] = $value_23;
                }
                $value_22 = $values_13;
            }
            if (is_null($data->{'CapAdd'})) {
                $value_22 = $data->{'CapAdd'};
            }
            $object->setCapAdd($value_22);
        }
        if (property_exists($data, 'CapDrop')) {
            $value_24 = $data->{'CapDrop'};
            if (is_array($data->{'CapDrop'})) {
                $values_14 = array();
                foreach ($data->{'CapDrop'} as $value_25) {
                    $values_14[] = $value_25;
                }
                $value_24 = $values_14;
            }
            if (is_null($data->{'CapDrop'})) {
                $value_24 = $data->{'CapDrop'};
            }
            $object->setCapDrop($value_24);
        }
        if (property_exists($data, 'RestartPolicy')) {
            $object->setRestartPolicy($this->serializer->deserialize($data->{'RestartPolicy'}, 'Docker\\API\\Model\\RestartPolicy', 'raw', $context));
        }
        if (property_exists($data, 'NetworkMode')) {
            $object->setNetworkMode($data->{'NetworkMode'});
        }
        if (property_exists($data, 'Devices')) {
            $values_15 = array();
            foreach ($data->{'Devices'} as $value_26) {
                $values_15[] = $this->serializer->deserialize($value_26, 'Docker\\API\\Model\\Device', 'raw', $context);
            }
            $object->setDevices($values_15);
        }
        if (property_exists($data, 'Ulimits')) {
            $value_27 = $data->{'Ulimits'};
            if (is_array($data->{'Ulimits'})) {
                $values_16 = array();
                foreach ($data->{'Ulimits'} as $value_28) {
                    $values_16[] = $this->serializer->deserialize($value_28, 'Docker\\API\\Model\\Ulimit', 'raw', $context);
                }
                $value_27 = $values_16;
            }
            if (is_null($data->{'Ulimits'})) {
                $value_27 = $data->{'Ulimits'};
            }
            $object->setUlimits($value_27);
        }
        if (property_exists($data, 'SecurityOpt')) {
            $value_29 = $data->{'SecurityOpt'};
            if (is_array($data->{'SecurityOpt'})) {
                $values_17 = array();
                foreach ($data->{'SecurityOpt'} as $value_30) {
                    $values_17[] = $value_30;
                }
                $value_29 = $values_17;
            }
            if (is_null($data->{'SecurityOpt'})) {
                $value_29 = $data->{'SecurityOpt'};
            }
            $object->setSecurityOpt($value_29);
        }
        if (property_exists($data, 'LogConfig')) {
            $object->setLogConfig($this->serializer->deserialize($data->{'LogConfig'}, 'Docker\\API\\Model\\LogConfig', 'raw', $context));
        }
        if (property_exists($data, 'CgroupParent')) {
            $object->setCgroupParent($data->{'CgroupParent'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $value = $object->getBinds();
        if (is_array($object->getBinds())) {
            $values = array();
            foreach ($object->getBinds() as $value_1) {
                $values[] = $value_1;
            }
            $value = $values;
        }
        if (is_null($object->getBinds())) {
            $value = $object->getBinds();
        }
        $data->{'Binds'} = $value;
        $value_2 = $object->getLinks();
        if (is_array($object->getLinks())) {
            $values_1 = array();
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
            $values_2 = new \stdClass();
            foreach ($object->getLxcConf() as $key => $value_4) {
                $values_2->{$key} = $value_4;
            }
            $data->{'LxcConf'} = $values_2;
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
        $value_5 = $object->getBlkioWeightDevice();
        if (is_array($object->getBlkioWeightDevice())) {
            $values_3 = array();
            foreach ($object->getBlkioWeightDevice() as $value_6) {
                $values_3[] = $this->serializer->serialize($value_6, 'raw', $context);
            }
            $value_5 = $values_3;
        }
        if (is_null($object->getBlkioWeightDevice())) {
            $value_5 = $object->getBlkioWeightDevice();
        }
        $data->{'BlkioWeightDevice'} = $value_5;
        $value_7 = $object->getBlkioDeviceReadBps();
        if (is_array($object->getBlkioDeviceReadBps())) {
            $values_4 = array();
            foreach ($object->getBlkioDeviceReadBps() as $value_8) {
                $values_4[] = $this->serializer->serialize($value_8, 'raw', $context);
            }
            $value_7 = $values_4;
        }
        if (is_null($object->getBlkioDeviceReadBps())) {
            $value_7 = $object->getBlkioDeviceReadBps();
        }
        $data->{'BlkioDeviceReadBps'} = $value_7;
        $value_9 = $object->getBlkioDeviceReadIOps();
        if (is_array($object->getBlkioDeviceReadIOps())) {
            $values_5 = array();
            foreach ($object->getBlkioDeviceReadIOps() as $value_10) {
                $values_5[] = $this->serializer->serialize($value_10, 'raw', $context);
            }
            $value_9 = $values_5;
        }
        if (is_null($object->getBlkioDeviceReadIOps())) {
            $value_9 = $object->getBlkioDeviceReadIOps();
        }
        $data->{'BlkioDeviceReadIOps'} = $value_9;
        $value_11 = $object->getBlkioDeviceWriteBps();
        if (is_array($object->getBlkioDeviceWriteBps())) {
            $values_6 = array();
            foreach ($object->getBlkioDeviceWriteBps() as $value_12) {
                $values_6[] = $this->serializer->serialize($value_12, 'raw', $context);
            }
            $value_11 = $values_6;
        }
        if (is_null($object->getBlkioDeviceWriteBps())) {
            $value_11 = $object->getBlkioDeviceWriteBps();
        }
        $data->{'BlkioDeviceWriteBps'} = $value_11;
        $value_13 = $object->getBlkioDeviceWriteIOps();
        if (is_array($object->getBlkioDeviceWriteIOps())) {
            $values_7 = array();
            foreach ($object->getBlkioDeviceWriteIOps() as $value_14) {
                $values_7[] = $this->serializer->serialize($value_14, 'raw', $context);
            }
            $value_13 = $values_7;
        }
        if (is_null($object->getBlkioDeviceWriteIOps())) {
            $value_13 = $object->getBlkioDeviceWriteIOps();
        }
        $data->{'BlkioDeviceWriteIOps'} = $value_13;
        if (null !== $object->getMemorySwappiness()) {
            $data->{'MemorySwappiness'} = $object->getMemorySwappiness();
        }
        if (null !== $object->getOomKillDisable()) {
            $data->{'OomKillDisable'} = $object->getOomKillDisable();
        }
        if (null !== $object->getPortBindings()) {
            $values_8 = new \stdClass();
            foreach ($object->getPortBindings() as $key_1 => $value_15) {
                $values_8->{$key_1} = $this->serializer->serialize($value_15, 'raw', $context);
            }
            $data->{'PortBindings'} = $values_8;
        }
        if (null !== $object->getPublishAllPorts()) {
            $data->{'PublishAllPorts'} = $object->getPublishAllPorts();
        }
        if (null !== $object->getPrivileged()) {
            $data->{'Privileged'} = $object->getPrivileged();
        }
        if (null !== $object->getReadonlyRootfs()) {
            $data->{'ReadonlyRootfs'} = $object->getReadonlyRootfs();
        }
        if (null !== $object->getDns()) {
            $values_9 = array();
            foreach ($object->getDns() as $value_16) {
                $values_9[] = $value_16;
            }
            $data->{'Dns'} = $values_9;
        }
        if (null !== $object->getDnsSearch()) {
            $values_10 = array();
            foreach ($object->getDnsSearch() as $value_17) {
                $values_10[] = $value_17;
            }
            $data->{'DnsSearch'} = $values_10;
        }
        $value_18 = $object->getExtraHosts();
        if (is_array($object->getExtraHosts())) {
            $values_11 = array();
            foreach ($object->getExtraHosts() as $value_19) {
                $values_11[] = $value_19;
            }
            $value_18 = $values_11;
        }
        if (is_null($object->getExtraHosts())) {
            $value_18 = $object->getExtraHosts();
        }
        $data->{'ExtraHosts'} = $value_18;
        $value_20 = $object->getVolumesFrom();
        if (is_array($object->getVolumesFrom())) {
            $values_12 = array();
            foreach ($object->getVolumesFrom() as $value_21) {
                $values_12[] = $value_21;
            }
            $value_20 = $values_12;
        }
        if (is_null($object->getVolumesFrom())) {
            $value_20 = $object->getVolumesFrom();
        }
        $data->{'VolumesFrom'} = $value_20;
        $value_22 = $object->getCapAdd();
        if (is_array($object->getCapAdd())) {
            $values_13 = array();
            foreach ($object->getCapAdd() as $value_23) {
                $values_13[] = $value_23;
            }
            $value_22 = $values_13;
        }
        if (is_null($object->getCapAdd())) {
            $value_22 = $object->getCapAdd();
        }
        $data->{'CapAdd'} = $value_22;
        $value_24 = $object->getCapDrop();
        if (is_array($object->getCapDrop())) {
            $values_14 = array();
            foreach ($object->getCapDrop() as $value_25) {
                $values_14[] = $value_25;
            }
            $value_24 = $values_14;
        }
        if (is_null($object->getCapDrop())) {
            $value_24 = $object->getCapDrop();
        }
        $data->{'CapDrop'} = $value_24;
        if (null !== $object->getRestartPolicy()) {
            $data->{'RestartPolicy'} = $this->serializer->serialize($object->getRestartPolicy(), 'raw', $context);
        }
        if (null !== $object->getNetworkMode()) {
            $data->{'NetworkMode'} = $object->getNetworkMode();
        }
        if (null !== $object->getDevices()) {
            $values_15 = array();
            foreach ($object->getDevices() as $value_26) {
                $values_15[] = $this->serializer->serialize($value_26, 'raw', $context);
            }
            $data->{'Devices'} = $values_15;
        }
        $value_27 = $object->getUlimits();
        if (is_array($object->getUlimits())) {
            $values_16 = array();
            foreach ($object->getUlimits() as $value_28) {
                $values_16[] = $this->serializer->serialize($value_28, 'raw', $context);
            }
            $value_27 = $values_16;
        }
        if (is_null($object->getUlimits())) {
            $value_27 = $object->getUlimits();
        }
        $data->{'Ulimits'} = $value_27;
        $value_29 = $object->getSecurityOpt();
        if (is_array($object->getSecurityOpt())) {
            $values_17 = array();
            foreach ($object->getSecurityOpt() as $value_30) {
                $values_17[] = $value_30;
            }
            $value_29 = $values_17;
        }
        if (is_null($object->getSecurityOpt())) {
            $value_29 = $object->getSecurityOpt();
        }
        $data->{'SecurityOpt'} = $value_29;
        if (null !== $object->getLogConfig()) {
            $data->{'LogConfig'} = $this->serializer->serialize($object->getLogConfig(), 'raw', $context);
        }
        if (null !== $object->getCgroupParent()) {
            $data->{'CgroupParent'} = $object->getCgroupParent();
        }
        return $data;
    }
}