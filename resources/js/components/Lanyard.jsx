import { Suspense, useRef } from 'react';
import { Canvas, useFrame } from '@react-three/fiber';
import { Environment, useTexture } from '@react-three/drei';
import * as THREE from 'three';

function InteractiveCard({ target }) {
  const group = useRef();
  const texture = useTexture('/images/profil.png');

  useFrame(() => {
    if (!group.current) return;
    group.current.rotation.y = THREE.MathUtils.lerp(group.current.rotation.y, target.current[0] * 0.35, 0.08);
    group.current.rotation.x = THREE.MathUtils.lerp(group.current.rotation.x, -target.current[1] * 0.15, 0.08);
  });

  return (
    <group ref={group} position={[0, -0.25, 0]}>
      <mesh position={[0, 0, 0.1]}>
        <boxGeometry args={[2.2, 3.2, 0.18]} />
        <meshStandardMaterial color="#111827" metalness={0.35} roughness={0.18} />
      </mesh>
      <mesh position={[0, 0, 0.16]}>
        <planeGeometry args={[2.0, 3.0]} />
        <meshStandardMaterial map={texture} toneMapped={false} />
      </mesh>
      <mesh position={[0, 0.95, 0.175]}>
        <planeGeometry args={[1.4, 1.4]} />
        <meshStandardMaterial color="#ffffff" opacity={0.18} transparent />
      </mesh>
      <mesh position={[0, -0.75, 0.17]}>
        <planeGeometry args={[1.6, 0.32]} />
        <meshStandardMaterial color="#fbbf24" />
      </mesh>
      <mesh position={[0, -1.38, 0.1]}>
        <capsuleGeometry args={[0.15, 0.9, 4, 8]} />
        <meshStandardMaterial color="#7c3aed" metalness={0.5} roughness={0.4} />
      </mesh>
      <mesh position={[-0.7, 0, 0.1]} rotation={[0, 0, Math.PI / 8]}>
        <boxGeometry args={[0.16, 0.48, 0.08]} />
        <meshStandardMaterial color="#e2e8f0" />
      </mesh>
      <mesh position={[0.7, 0, 0.1]} rotation={[0, 0, -Math.PI / 8]}>
        <boxGeometry args={[0.16, 0.48, 0.08]} />
        <meshStandardMaterial color="#e2e8f0" />
      </mesh>
    </group>
  );
}

export default function Lanyard({ position = [0, 0, 24], fov = 24 }) {
  const target = useRef([0, 0]);

  return (
    <div className="lanyard-wrapper">
      <div className="lanyard-band" />
      <Canvas
        camera={{ position, fov }}
        shadows
        gl={{ antialias: true, alpha: true }}
        onPointerMove={(event) => {
          const x = (event.clientX / window.innerWidth - 0.5) * 1.2;
          const y = (event.clientY / window.innerHeight - 0.5) * 1.2;
          target.current = [x, y];
        }}
        onPointerOut={() => {
          target.current = [0, 0];
        }}
        style={{ width: '100%', height: '100%' }}
      >
        <ambientLight intensity={0.7} />
        <directionalLight position={[3, 4, 3]} intensity={1.1} />
        <pointLight position={[-4, 2, 5]} intensity={0.4} />
        <Suspense fallback={null}>
          <Environment preset="city" />
          <InteractiveCard target={target} />
        </Suspense>
      </Canvas>
    </div>
  );
}
