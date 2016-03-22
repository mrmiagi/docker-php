<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Reference\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;
class ContainerConfigNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\ContainerConfig') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\ContainerConfig) {
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
        $object = new \Docker\API\Model\ContainerConfig();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'Id')) {
            $object->setId($data->{'Id'});
        }
        if (property_exists($data, 'Names')) {
            $values = array();
            foreach ($data->{'Names'} as $value) {
                $values[] = $value;
            }
            $object->setNames($values);
        }
        if (property_exists($data, 'Image')) {
            $object->setImage($data->{'Image'});
        }
        if (property_exists($data, 'ImageID')) {
            $object->setImageID($data->{'ImageID'});
        }
        if (property_exists($data, 'Command')) {
            $object->setCommand($data->{'Command'});
        }
        if (property_exists($data, 'Created')) {
            $object->setCreated($data->{'Created'});
        }
        if (property_exists($data, 'Status')) {
            $object->setStatus($data->{'Status'});
        }
        if (property_exists($data, 'Ports')) {
            $values_1 = array();
            foreach ($data->{'Ports'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Docker\\API\\Model\\Port', 'raw', $context);
            }
            $object->setPorts($values_1);
        }
        if (property_exists($data, 'Labels')) {
            $values_2 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Labels'} as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->setLabels($values_2);
        }
        if (property_exists($data, 'SizeRw')) {
            $object->setSizeRw($data->{'SizeRw'});
        }
        if (property_exists($data, 'SizeRootFs')) {
            $object->setSizeRootFs($data->{'SizeRootFs'});
        }
        if (property_exists($data, 'Hostname')) {
            $object->setHostname($data->{'Hostname'});
        }
        if (property_exists($data, 'Domainname')) {
            $object->setDomainname($data->{'Domainname'});
        }
        if (property_exists($data, 'User')) {
            $object->setUser($data->{'User'});
        }
        if (property_exists($data, 'AttachStdin')) {
            $object->setAttachStdin($data->{'AttachStdin'});
        }
        if (property_exists($data, 'AttachStdout')) {
            $object->setAttachStdout($data->{'AttachStdout'});
        }
        if (property_exists($data, 'AttachStderr')) {
            $object->setAttachStderr($data->{'AttachStderr'});
        }
        if (property_exists($data, 'Tty')) {
            $object->setTty($data->{'Tty'});
        }
        if (property_exists($data, 'OpenStdin')) {
            $object->setOpenStdin($data->{'OpenStdin'});
        }
        if (property_exists($data, 'StdinOnce')) {
            $object->setStdinOnce($data->{'StdinOnce'});
        }
        if (property_exists($data, 'Env')) {
            $values_3 = array();
            foreach ($data->{'Env'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setEnv($values_3);
        }
        if (property_exists($data, 'Cmd')) {
            $value_4 = $data->{'Cmd'};
            if (is_array($data->{'Cmd'})) {
                $values_4 = array();
                foreach ($data->{'Cmd'} as $value_5) {
                    $values_4[] = $value_5;
                }
                $value_4 = $values_4;
            }
            if (is_string($data->{'Cmd'})) {
                $value_4 = $data->{'Cmd'};
            }
            $object->setCmd($value_4);
        }
        if (property_exists($data, 'Entrypoint')) {
            $value_6 = $data->{'Entrypoint'};
            if (is_array($data->{'Entrypoint'})) {
                $values_5 = array();
                foreach ($data->{'Entrypoint'} as $value_7) {
                    $values_5[] = $value_7;
                }
                $value_6 = $values_5;
            }
            if (is_string($data->{'Entrypoint'})) {
                $value_6 = $data->{'Entrypoint'};
            }
            $object->setEntrypoint($value_6);
        }
        if (property_exists($data, 'Mounts')) {
            $values_6 = array();
            foreach ($data->{'Mounts'} as $value_8) {
                $values_6[] = $this->serializer->deserialize($value_8, 'Docker\\API\\Model\\Mount', 'raw', $context);
            }
            $object->setMounts($values_6);
        }
        if (property_exists($data, 'WorkingDir')) {
            $object->setWorkingDir($data->{'WorkingDir'});
        }
        if (property_exists($data, 'NetworkDisabled')) {
            $object->setNetworkDisabled($data->{'NetworkDisabled'});
        }
        if (property_exists($data, 'MacAddress')) {
            $object->setMacAddress($data->{'MacAddress'});
        }
        if (property_exists($data, 'ExposedPorts')) {
            $values_7 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'ExposedPorts'} as $key_1 => $value_9) {
                $values_7[$key_1] = $value_9;
            }
            $object->setExposedPorts($values_7);
        }
        if (property_exists($data, 'NetworkSettings')) {
            $object->setNetworkSettings($this->serializer->deserialize($data->{'NetworkSettings'}, 'Docker\\API\\Model\\NetworkConfig', 'raw', $context));
        }
        if (property_exists($data, 'HostConfig')) {
            $object->setHostConfig($this->serializer->deserialize($data->{'HostConfig'}, 'Docker\\API\\Model\\HostConfig', 'raw', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'Id'} = $object->getId();
        }
        if (null !== $object->getNames()) {
            $values = array();
            foreach ($object->getNames() as $value) {
                $values[] = $value;
            }
            $data->{'Names'} = $values;
        }
        if (null !== $object->getImage()) {
            $data->{'Image'} = $object->getImage();
        }
        if (null !== $object->getImageID()) {
            $data->{'ImageID'} = $object->getImageID();
        }
        if (null !== $object->getCommand()) {
            $data->{'Command'} = $object->getCommand();
        }
        if (null !== $object->getCreated()) {
            $data->{'Created'} = $object->getCreated();
        }
        if (null !== $object->getStatus()) {
            $data->{'Status'} = $object->getStatus();
        }
        if (null !== $object->getPorts()) {
            $values_1 = array();
            foreach ($object->getPorts() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'Ports'} = $values_1;
        }
        if (null !== $object->getLabels()) {
            $values_2 = new \stdClass();
            foreach ($object->getLabels() as $key => $value_2) {
                $values_2->{$key} = $value_2;
            }
            $data->{'Labels'} = $values_2;
        }
        if (null !== $object->getSizeRw()) {
            $data->{'SizeRw'} = $object->getSizeRw();
        }
        if (null !== $object->getSizeRootFs()) {
            $data->{'SizeRootFs'} = $object->getSizeRootFs();
        }
        if (null !== $object->getHostname()) {
            $data->{'Hostname'} = $object->getHostname();
        }
        if (null !== $object->getDomainname()) {
            $data->{'Domainname'} = $object->getDomainname();
        }
        if (null !== $object->getUser()) {
            $data->{'User'} = $object->getUser();
        }
        if (null !== $object->getAttachStdin()) {
            $data->{'AttachStdin'} = $object->getAttachStdin();
        }
        if (null !== $object->getAttachStdout()) {
            $data->{'AttachStdout'} = $object->getAttachStdout();
        }
        if (null !== $object->getAttachStderr()) {
            $data->{'AttachStderr'} = $object->getAttachStderr();
        }
        if (null !== $object->getTty()) {
            $data->{'Tty'} = $object->getTty();
        }
        if (null !== $object->getOpenStdin()) {
            $data->{'OpenStdin'} = $object->getOpenStdin();
        }
        if (null !== $object->getStdinOnce()) {
            $data->{'StdinOnce'} = $object->getStdinOnce();
        }
        if (null !== $object->getEnv()) {
            $values_3 = array();
            foreach ($object->getEnv() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'Env'} = $values_3;
        }
        if (null !== $object->getCmd()) {
            $value_4 = $object->getCmd();
            if (is_array($object->getCmd())) {
                $values_4 = array();
                foreach ($object->getCmd() as $value_5) {
                    $values_4[] = $value_5;
                }
                $value_4 = $values_4;
            }
            if (is_string($object->getCmd())) {
                $value_4 = $object->getCmd();
            }
            $data->{'Cmd'} = $value_4;
        }
        if (null !== $object->getEntrypoint()) {
            $value_6 = $object->getEntrypoint();
            if (is_array($object->getEntrypoint())) {
                $values_5 = array();
                foreach ($object->getEntrypoint() as $value_7) {
                    $values_5[] = $value_7;
                }
                $value_6 = $values_5;
            }
            if (is_string($object->getEntrypoint())) {
                $value_6 = $object->getEntrypoint();
            }
            $data->{'Entrypoint'} = $value_6;
        }
        if (null !== $object->getMounts()) {
            $values_6 = array();
            foreach ($object->getMounts() as $value_8) {
                $values_6[] = $this->serializer->serialize($value_8, 'raw', $context);
            }
            $data->{'Mounts'} = $values_6;
        }
        if (null !== $object->getWorkingDir()) {
            $data->{'WorkingDir'} = $object->getWorkingDir();
        }
        if (null !== $object->getNetworkDisabled()) {
            $data->{'NetworkDisabled'} = $object->getNetworkDisabled();
        }
        if (null !== $object->getMacAddress()) {
            $data->{'MacAddress'} = $object->getMacAddress();
        }
        if (null !== $object->getExposedPorts()) {
            $values_7 = new \stdClass();
            foreach ($object->getExposedPorts() as $key_1 => $value_9) {
                $values_7->{$key_1} = $value_9;
            }
            $data->{'ExposedPorts'} = $values_7;
        }
        if (null !== $object->getNetworkSettings()) {
            $data->{'NetworkSettings'} = $this->serializer->serialize($object->getNetworkSettings(), 'raw', $context);
        }
        if (null !== $object->getHostConfig()) {
            $data->{'HostConfig'} = $this->serializer->serialize($object->getHostConfig(), 'raw', $context);
        }
        return $data;
    }
}