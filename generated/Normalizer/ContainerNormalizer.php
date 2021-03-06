<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Reference\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;
class ContainerNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\Container') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\Container) {
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
        $object = new \Docker\API\Model\Container();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'AppArmorProfile')) {
            $object->setAppArmorProfile($data->{'AppArmorProfile'});
        }
        if (property_exists($data, 'Args')) {
            $values = array();
            foreach ($data->{'Args'} as $value) {
                $values[] = $value;
            }
            $object->setArgs($values);
        }
        if (property_exists($data, 'Config')) {
            $object->setConfig($this->serializer->deserialize($data->{'Config'}, 'Docker\\API\\Model\\ContainerConfig', 'raw', $context));
        }
        if (property_exists($data, 'Created')) {
            $object->setCreated($data->{'Created'});
        }
        if (property_exists($data, 'Driver')) {
            $object->setDriver($data->{'Driver'});
        }
        if (property_exists($data, 'ExecDriver')) {
            $object->setExecDriver($data->{'ExecDriver'});
        }
        if (property_exists($data, 'ExecIDs')) {
            $object->setExecIDs($data->{'ExecIDs'});
        }
        if (property_exists($data, 'HostConfig')) {
            $object->setHostConfig($this->serializer->deserialize($data->{'HostConfig'}, 'Docker\\API\\Model\\HostConfig', 'raw', $context));
        }
        if (property_exists($data, 'HostnamePath')) {
            $object->setHostnamePath($data->{'HostnamePath'});
        }
        if (property_exists($data, 'HostsPath')) {
            $object->setHostsPath($data->{'HostsPath'});
        }
        if (property_exists($data, 'LogPath')) {
            $object->setLogPath($data->{'LogPath'});
        }
        if (property_exists($data, 'Id')) {
            $object->setId($data->{'Id'});
        }
        if (property_exists($data, 'Image')) {
            $object->setImage($data->{'Image'});
        }
        if (property_exists($data, 'MountLabel')) {
            $object->setMountLabel($data->{'MountLabel'});
        }
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'NetworkSettings')) {
            $object->setNetworkSettings($this->serializer->deserialize($data->{'NetworkSettings'}, 'Docker\\API\\Model\\NetworkConfig', 'raw', $context));
        }
        if (property_exists($data, 'Path')) {
            $object->setPath($data->{'Path'});
        }
        if (property_exists($data, 'ProcessLabel')) {
            $object->setProcessLabel($data->{'ProcessLabel'});
        }
        if (property_exists($data, 'ResolvConfPath')) {
            $object->setResolvConfPath($data->{'ResolvConfPath'});
        }
        if (property_exists($data, 'RestartCount')) {
            $object->setRestartCount($data->{'RestartCount'});
        }
        if (property_exists($data, 'State')) {
            $object->setState($this->serializer->deserialize($data->{'State'}, 'Docker\\API\\Model\\ContainerState', 'raw', $context));
        }
        if (property_exists($data, 'Mounts')) {
            $values_1 = array();
            foreach ($data->{'Mounts'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Docker\\API\\Model\\Mount', 'raw', $context);
            }
            $object->setMounts($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getAppArmorProfile()) {
            $data->{'AppArmorProfile'} = $object->getAppArmorProfile();
        }
        if (null !== $object->getArgs()) {
            $values = array();
            foreach ($object->getArgs() as $value) {
                $values[] = $value;
            }
            $data->{'Args'} = $values;
        }
        if (null !== $object->getConfig()) {
            $data->{'Config'} = $this->serializer->serialize($object->getConfig(), 'raw', $context);
        }
        if (null !== $object->getCreated()) {
            $data->{'Created'} = $object->getCreated();
        }
        if (null !== $object->getDriver()) {
            $data->{'Driver'} = $object->getDriver();
        }
        if (null !== $object->getExecDriver()) {
            $data->{'ExecDriver'} = $object->getExecDriver();
        }
        if (null !== $object->getExecIDs()) {
            $data->{'ExecIDs'} = $object->getExecIDs();
        }
        if (null !== $object->getHostConfig()) {
            $data->{'HostConfig'} = $this->serializer->serialize($object->getHostConfig(), 'raw', $context);
        }
        if (null !== $object->getHostnamePath()) {
            $data->{'HostnamePath'} = $object->getHostnamePath();
        }
        if (null !== $object->getHostsPath()) {
            $data->{'HostsPath'} = $object->getHostsPath();
        }
        if (null !== $object->getLogPath()) {
            $data->{'LogPath'} = $object->getLogPath();
        }
        if (null !== $object->getId()) {
            $data->{'Id'} = $object->getId();
        }
        if (null !== $object->getImage()) {
            $data->{'Image'} = $object->getImage();
        }
        if (null !== $object->getMountLabel()) {
            $data->{'MountLabel'} = $object->getMountLabel();
        }
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getNetworkSettings()) {
            $data->{'NetworkSettings'} = $this->serializer->serialize($object->getNetworkSettings(), 'raw', $context);
        }
        if (null !== $object->getPath()) {
            $data->{'Path'} = $object->getPath();
        }
        if (null !== $object->getProcessLabel()) {
            $data->{'ProcessLabel'} = $object->getProcessLabel();
        }
        if (null !== $object->getResolvConfPath()) {
            $data->{'ResolvConfPath'} = $object->getResolvConfPath();
        }
        if (null !== $object->getRestartCount()) {
            $data->{'RestartCount'} = $object->getRestartCount();
        }
        if (null !== $object->getState()) {
            $data->{'State'} = $this->serializer->serialize($object->getState(), 'raw', $context);
        }
        if (null !== $object->getMounts()) {
            $values_1 = array();
            foreach ($object->getMounts() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'Mounts'} = $values_1;
        }
        return $data;
    }
}