import {
  createIcons,
  Award,
  MapPin,
  Phone,
  SquareArrowOutUpRight,
  ThumbsUp,
  CircleAlert,
  X,
  Menu,
  MoveLeft,
  MoveRight,
  VectorPolygon,
  Home,
  BedDouble,
  Bath,
  CheckCircle2,
  Building2,
  Eye,
  Target,
  Users,
  ShieldCheck,
  Layers2,
  ChevronRight,
  ChevronLeft,
  ChevronDown,
  ArrowRight,
} from "lucide";
import Alpine from "alpinejs";

const initLucideIcons = () => {
  createIcons({
    icons: {
      Award,
      MapPin,
      ThumbsUp,
      Phone,
      SquareArrowOutUpRight,
      CircleAlert,
      Menu,
      X,
      MoveLeft,
      MoveRight,
      VectorPolygon,
      Home,
      BedDouble,
      Bath,
      CheckCircle2,
      Building2,
      Eye,
      Target,
      Users,
      ShieldCheck,
      Layers2,
      ChevronRight,
      ChevronLeft,
      ChevronDown,
      ArrowRight,
    },
  });
};

window.initLucideIcons = initLucideIcons;

document.addEventListener("DOMContentLoaded", () => {
  initLucideIcons();
});

window.Alpine = Alpine;
Alpine.start();
