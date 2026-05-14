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
 * Dados específico para veículos novos - Pintura e Cor
 *
 * @pw_element string $cTipoPinVeiculo Veículos - Tipo de Pintura
 * @pw_element string $cCodCorDENATRANVeiculo Veículos - Código da Cor (DENATRAN)<BR><BR>Pode ser:<BR><BR>01 - AMARELO<BR>02 - AZUL<BR>03 - BEGE<BR>04 - BRANCA<BR>05 - CINZA<BR>06 - DOURADA<BR>07 - GRENÁ<BR>08 - LARANJA<BR>09 - MARROM<BR>10 - PRATA<BR>11 - PRETA<BR>12 - ROSA<BR>13 - ROXA<BR>14 - VERDE<BR>15 - VERMELHA<BR>16 - FANTASIA
 * @pw_element string $cCodCorMontVeiculo Veículos - Código da Cor da Montadora
 * @pw_element string $cDescMontVeiculo Veículos - Descrição da Cor da Montadora
 * @pw_complex pinturaCor
 */
class PinturaCor{
	/**
	 * Veículos - Tipo de Pintura
	 *
	 * @var string
	 */
	public string $cTipoPinVeiculo;
	/**
	 * Veículos - Código da Cor (DENATRAN)<BR><BR>Pode ser:<BR><BR>01 - AMARELO<BR>02 - AZUL<BR>03 - BEGE<BR>04 - BRANCA<BR>05 - CINZA<BR>06 - DOURADA<BR>07 - GRENÁ<BR>08 - LARANJA<BR>09 - MARROM<BR>10 - PRATA<BR>11 - PRETA<BR>12 - ROSA<BR>13 - ROXA<BR>14 - VERDE<BR>15 - VERMELHA<BR>16 - FANTASIA
	 *
	 * @var string
	 */
	public string $cCodCorDENATRANVeiculo;
	/**
	 * Veículos - Código da Cor da Montadora
	 *
	 * @var string
	 */
	public string $cCodCorMontVeiculo;
	/**
	 * Veículos - Descrição da Cor da Montadora
	 *
	 * @var string
	 */
	public string $cDescMontVeiculo;
}
