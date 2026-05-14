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
 * Detalhamento específico para medicamentos
 *
 * @pw_element string $cCodigoAnvisa Código ANVISA.<BR><BR>O "Código de Produto da ANVISA" deve possuir 13 caractéres.
 * @pw_element decimal $nValMaxCons Preço máximo consumidor.<BR><BR>Preço máximo deve ser maior ou igual a zero
 * @pw_complex medicamentos
 */
class Medicamentos{
	/**
	 * Código ANVISA.<BR><BR>O "Código de Produto da ANVISA" deve possuir 13 caractéres.
	 *
	 * @var string
	 */
	public string $cCodigoAnvisa;
	/**
	 * Preço máximo consumidor.<BR><BR>Preço máximo deve ser maior ou igual a zero
	 *
	 * @var decimal
	 */
	public float $nValMaxCons;
}
