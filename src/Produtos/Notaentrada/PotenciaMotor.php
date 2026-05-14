<?php

namespace OmieLib\Produtos\Notaentrada;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Notaentrada\Request\NeAlterarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeConsultarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeExcluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeIncluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeListarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeStatusRequest;
use OmieLib\Produtos\Notaentrada\Response\NeAlterarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeConsultarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeExcluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeIncluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeListarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeStatusResponse;

/**
 * Dados específico para veículos novos - Potência, Combustível e Motor
 *
 * @pw_element string $cPotenciaVeiculo Veículos - Potência Motor (CV)
 * @pw_element string $cCilindradasVeiculo Veículos - Cilindradas
 * @pw_element string $cTipoCombVeiculo Veículos - Tipo de Combustível<BR><BR>Pode ser: <BR><BR>01 - Álcool<BR>02 - Gasolina<BR>03 - Diesel<BR>16 - Álcool/Gasolina<BR>17 - Gasolina/Álcool/GNV<BR>18 - Gasolina/Elétrico<BR>04 - Gasogênio<BR>05 - Gás Metano<BR>06 - Elétrico/Fonte Interna<BR>07 - Elétrico/Fonte Externa<BR>08 - Gasolina/Gás Natural Combustív<BR>09 - Álcool/Gás Natural Combustível<BR>10 - Diesel/Gas Natural Combustível<BR>11 - Vide/Campo/Observação<BR>12 - Álcool/Gás Natural Veicular<BR>13 - Gasolina/Gás Natural Veicular<BR>14 - Diesel/Gás Natural Veicular<BR>15 - Gás Natural Veicular
 * @pw_element string $cNumMotorVeiculo Veículos - Número de Motor
 * @pw_complex potenciaMotor
 */
class PotenciaMotor{
	/**
	 * Veículos - Potência Motor (CV)
	 *
	 * @var string
	 */
	public string $cPotenciaVeiculo;
	/**
	 * Veículos - Cilindradas
	 *
	 * @var string
	 */
	public string $cCilindradasVeiculo;
	/**
	 * Veículos - Tipo de Combustível<BR><BR>Pode ser: <BR><BR>01 - Álcool<BR>02 - Gasolina<BR>03 - Diesel<BR>16 - Álcool/Gasolina<BR>17 - Gasolina/Álcool/GNV<BR>18 - Gasolina/Elétrico<BR>04 - Gasogênio<BR>05 - Gás Metano<BR>06 - Elétrico/Fonte Interna<BR>07 - Elétrico/Fonte Externa<BR>08 - Gasolina/Gás Natural Combustív<BR>09 - Álcool/Gás Natural Combustível<BR>10 - Diesel/Gas Natural Combustível<BR>11 - Vide/Campo/Observação<BR>12 - Álcool/Gás Natural Veicular<BR>13 - Gasolina/Gás Natural Veicular<BR>14 - Diesel/Gás Natural Veicular<BR>15 - Gás Natural Veicular
	 *
	 * @var string
	 */
	public string $cTipoCombVeiculo;
	/**
	 * Veículos - Número de Motor
	 *
	 * @var string
	 */
	public string $cNumMotorVeiculo;
}
