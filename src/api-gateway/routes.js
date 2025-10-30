import express from "express";
import proxy from "express-http-proxy";

const router = express.Router();

router.use("/auth", proxy("http://auth-service:8001"));
router.use("/users", proxy("http://user-service:8002"));
router.use("/loans", proxy("http://loan-service:8003"));
router.use("/payments", proxy("http://payment-service:8004"));

export default router;
