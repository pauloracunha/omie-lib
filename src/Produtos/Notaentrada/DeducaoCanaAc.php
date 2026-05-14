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
 * Deduções na aquisição de cana-de-açúcar
 *
 * @pw_element string $cDescrDed Descrição da dedução na aquisição de cana-de-açúcar
 * @pw_element decimal $nValorDed Valor da dedução
 * @pw_complex DeducaoCanaAc
 */
class DeducaoCanaAc{
	/**
	 * Descrição da dedução na aquisição de cana-de-açúcar
	 *
	 * @var string
	 */
	public string $cDescrDed;
	/**
	 * Valor da dedução
	 *
	 * @var decimal
	 */
	public float $nValorDed;
}
